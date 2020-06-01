<?php 

// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= '/usr/' . $_SESSION['username'];

// echo $path;

if (isset($_GET['file'])) {
    session_start();
    // copies files to a deleted directory
    copy('../usr/' . $_SESSION['username'] . '/upload' . '/' . $_GET['file'], '../usr/' . $_SESSION['username'] . '/deleted' . '/' .$_GET['file']);

  
    if (isset($_GET['file'])) {
        if (unlink('../usr/' . $_SESSION['username'] . '/upload' . '/' . $_GET['file'])) {
            header('Location: ../riffcatcher.php');
        } else {
            echo '<p class="alert alert-danger text-center">Failed to delete file</p>';
        }
    }
}

function display_files()
{
    $dir = 'usr/' . $_SESSION['username'] . '/upload'; //$_SESSION['folder']    
    if (is_dir($dir)) { 
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    echo "<div><a href=\"usr/" . $_SESSION['username'] . "/upload/$filename\"><a href=\"usr/" . $_SESSION['username'] . "/upload/$filename\">$filename</a>";
                    $filename = rawurlencode($filename); 
                    echo "<a href=\"functions/display.files.php?file=$filename\"><br><div class=\"btn btn-outline-danger w-10\">Delete</div></a></div>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } //end second if   
}
