<?php 
session_start();


function display_uploaded_files(){
    $dir = '../usr/' . $_SESSION['username'] . '/upload'; //$_SESSION['folder']    
    $output = "";
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    $output .= "<div class=\"display-files\"><a href=\"usr/" . $_SESSION['username'] . "/upload/$filename\"><p class=\"text-center ml-5\">$filename</p></a>";                    
                    $output .= "<audio controls><source src=\"usr/" . $_SESSION['username'] . "/upload/$filename\" type=\"audio/mpeg\"></audio>";
                    $filename = rawurlencode($filename);
                    $output .= "<a href=\"functions/display.files.php?file=$filename\"><div class=\"btn btn-outline-danger w-10  ml-3\">Delete</div></a></div>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } //end second if   
    return $output;
}

echo display_uploaded_files();
