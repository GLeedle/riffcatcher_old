<?php 

require_once "sql/db_connect.inc.php";
$user_id = $_SESSION['user_id'];



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //set variables from the $_POST
    $bandname = $db->real_escape_string($_POST['bandname']);
    $banddesc = $db->real_escape_string($_POST['banddesc']);
    $genre_id = $db->real_escape_string($_POST['genre']);

    $sql = "INSERT INTO band (bandname,banddesc,genre_id,user_id)
    VALUES ('$bandname','$banddesc','$genre_id','$user_id')";
    $db->query($sql);

    $sql = "SELECT band_id FROM band WHERE bandname = '$bandname'";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()){
        $band_id = $row['band_id'];
    }

    $sql = "INSERT INTO band_member (user_id,band_id)
    VALUES ('$user_id','$band_id')"; 
    echo $sql;
    $db->query($sql);
    header('Location: band.php');
}