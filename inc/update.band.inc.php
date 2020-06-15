<?php
$band_id = $_SESSION['band_id'];
require_once "sql/db_connect.inc.php";
// $user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM band WHERE band_id = $band_id";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {

    $bandname_db = $row['bandname'];
    $banddesc_db = $row['banddesc'];
    $genre_db = $row['genre_id'];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

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
    // var_dump($_POST);
    $sql = "UPDATE band SET
    bandname = '$bandname',
    banddesc = '$banddesc',
    genre_id = '$genre'
    WHERE band_id = '$band_id'";
   
    $db->query($sql);

    if (!empty($_POST['bandmember'])) {
        $username = strtolower($_POST['bandmember']);
        $sql = "SELECT user_id FROM user WHERE username = '$username'";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $user_id = $row['user_id'];
        }
        $sql = "INSERT INTO band_member (user_id, band_id)
                VALUES( '$user_id','$band_id')";
        $db->query($sql);
    }

    header('Location:' . $_SESSION['band_url']);
}
