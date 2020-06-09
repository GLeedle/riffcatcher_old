<?php
// Connect to the Database
require_once "sql/db_connect.inc.php";
// Define these errors in an array
$upload_errors = array(
    UPLOAD_ERR_OK                 => "No errors.",
    UPLOAD_ERR_INI_SIZE          => "Larger than upload_max_filesize.",
    UPLOAD_ERR_FORM_SIZE         => "Larger than form MAX_FILE_SIZE.",
    UPLOAD_ERR_PARTIAL             => "Partial upload.",
    UPLOAD_ERR_NO_FILE             => "No file.",
    UPLOAD_ERR_NO_TMP_DIR         => "No temporary directory.",
    UPLOAD_ERR_CANT_WRITE         => "Can't write to disk.",
    UPLOAD_ERR_EXTENSION         => "File upload stopped by extension."
);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // what file do we need to move?
        $tmp_file = $_FILES['file_upload']['tmp_name'];

        // set target file name
        // basename gets just the file name
        $target_file = basename($_FILES['file_upload']['name']);

        // set upload folder name
        $upload_dir = "usr/" . $_SESSION['username'] . "/upload";

        // Now lets move the file
        // move_uploaded_file returns false if something went wrong
        if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
            $message = "File uploaded successfully";
        } else {
            $error = $_FILES['file_upload']['error'];
            $message = $upload_errors[$error];
        } // end of if


        // setting the file name and location
        $location =  $_SESSION['username'] . "/upload" . '/' . $target_file;
        // Inserting the file upload data to the DB
        $sql = "INSERT INTO riff (user_id,riff_name,riff_loc)
            VALUES($_SESSION[user_id],'$target_file','$location')";
        // echo $sql;
        // executing the SQL insertion into the DB
        $result = $db->query($sql);

        // Checking for any errors from the DB
        if (!$result) {
            echo "<div class=\"alert-danger p-2 mx-auto text-center\">There was a problem uploading your file and or a DB issue</div>";
        } else {
            echo "<div class=\"alert-success p-2 mx-auto text-center\">Upload successful</div>";
        }
        // Redirect is necessary to clear the insert variables
        header('Location: riffcatcher.php');
    } // end of if

