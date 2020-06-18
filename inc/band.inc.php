<?php
// connects to the database
require_once "sql/db_connect.inc.php";
// sets user_id variable 
$user_id = $_SESSION['user_id'];
// calls the band information from the 3 tables as a join and displays their information
$sql = "SELECT band.band_id, band.bandname, band.banddesc, genre.genre 
        FROM band 
        JOIN band_member 
        ON band.band_id = band_member.band_id 
        JOIN genre 
        ON band.genre_id = genre.genre_id 
        WHERE band_member.user_id = $user_id";
// submits sql variable to database
$result = $db->query($sql);

// creates table to store results
echo "<table>";
echo "<th>Band Name</th>";
echo "<th>Band Description</th>";
echo "<th>Genre</th>";
// loops through each row of data that the sql retrieved from the database
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><a href='band-info.php?band_id={$row['band_id']}&bandname={$row['bandname']}'>{$row['bandname']}</a></td>";
    echo "<td>{$row['banddesc']}</td>";
    echo "<td>{$row['genre']}</td>";
    echo "</tr>";
}
echo "</table>";


