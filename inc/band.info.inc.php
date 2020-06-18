<?php 
// storing GET data into the session variable to be retrieved later
$_SESSION['band_id'] = $_GET['band_id'];
$_SESSION['bandname'] = $_GET['bandname'];
$_SESSION['band_url'] = "band-info.php?band_id=" . $_GET['band_id'] . "&bandname=" . rawurlencode($_GET['bandname']);
// connect to the database
require_once "sql/db_connect.inc.php";
// pull username of all users connected to band 
$sql = "SELECT user.username 
        FROM user
        JOIN band_member
        ON band_member.user_id = user.user_id
        WHERE band_id = {$_GET['band_id']}";
    // query database to gather those users
    $result = $db->query($sql);
    // loop through results from database
    while ($row = $result->fetch_assoc()){
        // each iteration it should show the user associated to those files
        $username = strtoupper($row['username']);
        // store path to the user folder from the server into variable
        $dir = 'usr/' . $username . '/upload'; 
        echo "<div class=\"riffcatcher-title-text\"><h1>" . $username . "'s Riffs</h1><hr>";  
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            // loop through the files on the server and display the files in the browser
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    echo "<a href=\"usr/" . $username . "/upload/$filename\"><p class=\"text-center ml-5\">$filename</p></a>";                    
                    echo "<audio controls><source src=\"usr/" . $username . "/upload/$filename\" type=\"audio/mpeg\"></audio>";
                    $filename = rawurlencode($filename);                                      
                }
            } // end while
            echo "</div>";
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } //end second if   
}
