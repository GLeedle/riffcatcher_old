<?php 
// connect to the database
require_once "sql/db_connect.inc.php";
// set variable from the Sesssion
$user_id = $_SESSION['user_id'];
// check to make sure this is POST data
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //set variables from the $_POST
    $bandname = $db->real_escape_string($_POST['bandname']);
    $banddesc = $db->real_escape_string($_POST['banddesc']);
    $genre_id = $db->real_escape_string($_POST['genre']);
    // insert data from form into the database folders
    $sql = "INSERT INTO band (bandname,banddesc,genre_id,user_id)
    VALUES ('$bandname','$banddesc','$genre_id','$user_id')";
    // send query to database
    $db->query($sql);
    // create second query to pull band_id
    $sql = "SELECT band_id FROM band WHERE bandname = '$bandname'";
    //query database to pull band_id
    $result = $db->query($sql);
    // loop through the array and set the band_id to a variable name 
    while ($row = $result->fetch_assoc()){
        $band_id = $row['band_id'];
    }
    // set third query to insert data into band_member table using the band_id
    $sql = "INSERT INTO band_member (user_id,band_id)
    VALUES ('$user_id','$band_id')"; 
    // send query to database
    $db->query($sql);
    // redirect page back to band page
    header('Location: band.php');
}