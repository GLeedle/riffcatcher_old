<?php

require_once "sql/db_connect.inc.php";
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM band WHERE user_id = $user_id";

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
        $banddesc = $db->real_escape_string(ucwords(strtolower($_POST['banddesc'])));
        $_SESSION['banddesc'] = $_POST['banddesc'];
    }

    if (empty($_POST['genre'])) {
        $genre = $genre_db;
    } else {
        $genre = $db->real_escape_string(ucwords(strtolower($_POST['genre'])));
        $_SESSION['genre'] = $_POST['genre'];
    }

    $sql = "UPDATE band SET
    bandname = '$bandname',
    banddesc = '$banddesc',
    genre_id = '$genre',
    user_id = $user_id";

    $db->query($sql);
    header('Location: band.php');
}
