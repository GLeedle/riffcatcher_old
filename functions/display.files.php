<?php

if (isset($_GET['file'])) {
    session_start();
    require_once __DIR__ . "/../sql/db_connect.inc.php";
    // copies files to a deleted directory
    copy('../usr/' . $_SESSION['username'] . '/upload' . '/' . $_GET['file'], '../usr/' . $_SESSION['username'] . '/deleted' . '/' . $_GET['file']);


    if (isset($_GET['file'])) {
        $filename = '"' . $_GET['file'] . '"';
        if (unlink('../usr/' . $_SESSION['username'] . '/upload' . '/' . $_GET['file'])) {
            $sql = "DELETE FROM riff WHERE riff_name = $filename;";
            $db->query($sql);
            header('Location: ../riffcatcher.php');
        } else {
            echo '<p class="alert alert-danger text-center">Failed to delete file</p>';
        }
    }

    
}

function display_uploaded_files(){
    $dir = 'usr/' . $_SESSION['username'] . '/upload'; //$_SESSION['folder']    
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    echo "<div class=\"display-files\"><a href=\"usr/" . $_SESSION['username'] . "/upload/$filename\"><p class=\"text-center ml-5\">$filename</p></a>";                    
                    echo "<audio controls><source src=\"usr/" . $_SESSION['username'] . "/upload/$filename\" type=\"audio/mpeg\"></audio>";
                    $filename = rawurlencode($filename);
                    echo "<a href=\"functions/display.files.php?file=$filename\"><div class=\"btn btn-outline-danger w-10  ml-3\">Delete</div></a></div>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } //end second if   
}




