<?php
require_once "sql/db_connect.inc.php";

$band_id = $_SESSION['band_id'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql =  "DELETE
            FROM band
            WHERE band_id = $band_id";
    $db->query($sql);

    $sql =  "DELETE
            FROM band_member
            WHERE band_id = $band_id";
    $db->query($sql);

 

    header('Location: band.php');
}
