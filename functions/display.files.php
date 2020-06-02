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

function display_uploaded_files()
{
    echo "<div><h1>Uploaded Files</h1></div>";
    $dir = 'usr/' . $_SESSION['username'] . '/upload'; //$_SESSION['folder']    
    if (is_dir($dir)) { 
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {                   
                    echo "<div><a href=\"usr/" . $_SESSION['username'] . "/upload/$filename\"><a href=\"usr/" . $_SESSION['username'] . "/upload/$filename\">$filename</a>";
                    echo "<br><audio controls><source src=\"usr/" . $_SESSION['username'] . "/upload/$filename\" type=\"audio/mpeg\"></audio>";
                    $filename = rawurlencode($filename); 
                    echo "<a href=\"functions/display.files.php?file=$filename\"><div class=\"btn btn-outline-danger w-10 mb-5 ml-3\">Delete</div></a></div><br><br>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } //end second if   
}
