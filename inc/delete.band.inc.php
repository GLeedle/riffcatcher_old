<?php
// connect to database
require_once "sql/db_connect.inc.php";
// set variable for band_id to be used
$band_id = $_SESSION['band_id'];
// check to make sure this is POST data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // call the database twice to delete from the band table then the band_member table
        $sql =  "DELETE
            FROM band
            WHERE band_id = $band_id";
        $db->query($sql);
        sleep(1);
        $sql =  "DELETE
            FROM band_member
            WHERE band_id = $band_id";
        $db->query($sql);

        // redirect to band page
        header('Location: band.php');
}
