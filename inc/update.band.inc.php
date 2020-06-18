<?php
// set variable to band_id
$band_id = $_SESSION['band_id'];
// connects to the database
require_once "sql/db_connect.inc.php";

// pulls all data from band table based on band_id
$sql = "SELECT * FROM band WHERE band_id = $band_id";
// query database
$result = $db->query($sql);

// loop through results
while ($row = $result->fetch_assoc()) {
// set variables from result
    $bandname_db = $row['bandname'];
    $banddesc_db = $row['banddesc'];
    $genre_db = $row['genre_id'];
}
// makes sure this is POST data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// if post data is empty, uses the data that was brought back from the query, if set, assigns data to new variable
    if (empty($_POST['bandname'])) {
        $bandname = $bandname_db;
    } else {
        $bandname = $db->real_escape_string(ucwords(strtolower($_POST['bandname'])));
        $_SESSION['bandname'] = $_POST['bandname'];
    }

    if (empty($_POST['banddesc'])) {
        $banddesc = $banddesc_db;
    } else {
        $banddesc = $db->real_escape_string($_POST['banddesc']);
        $_SESSION['banddesc'] = $_POST['banddesc'];
    }

    if (empty($_POST['genre'])) {
        $genre = $genre_db;
    } else {
        $genre = $db->real_escape_string(ucwords(strtolower($_POST['genre'])));
        $_SESSION['genre'] = $_POST['genre'];
    }
    // updates the database with new variables
    $sql = "UPDATE band SET
    bandname = '$bandname',
    banddesc = '$banddesc',
    genre_id = '$genre'
    WHERE band_id = '$band_id'";
    // queries database
    $db->query($sql);
    // checks to see if new data is being submitted to add a new member to the band
    if (!empty($_POST['bandmember'])) {
        $username = strtolower($_POST['bandmember']);
        // grabs the user_id base on username submitted
        $sql = "SELECT user_id FROM user WHERE username = '$username'";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $user_id = $row['user_id'];
        }
        // inserts that new user to the band_member page
        $sql = "INSERT INTO band_member (user_id, band_id)
                VALUES( '$user_id','$band_id')";
        $db->query($sql);
    }
    // redirects to the band page
    header('Location:' . $_SESSION['band_url']);
}
