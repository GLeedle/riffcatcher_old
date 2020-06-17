<?php
require_once "sql/db_connect.inc.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT band.band_id, band.bandname, band.banddesc, genre.genre 
        FROM band 
        JOIN band_member 
        ON band.band_id = band_member.band_id 
        JOIN genre 
        ON band.genre_id = genre.genre_id 
        WHERE band_member.user_id = $user_id";

$result = $db->query($sql);
// var_dump($result);

echo "<table>";
echo "<th>Band Name</th>";
echo "<th>Band Description</th>";
echo "<th>Genre</th>";

while ($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td><a href='band-info.php?band_id={$row['band_id']}&bandname={$row['bandname']}'>{$row['bandname']}</a></td>";
    echo "<td>{$row['banddesc']}</td>";
    echo "<td>{$row['genre']}</td>";
    echo "</tr>";
}
echo "</table>";


