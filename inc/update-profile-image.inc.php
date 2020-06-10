<?php

require_once "sql/db_connect.inc.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // what file do we need to move?
    $tmp_file = $_FILES['file_upload']['tmp_name'];

    // set target file name
    // basename gets just the file name
    $target_file = basename($_FILES['file_upload']['name']);
    $_SESSION['profile_image'] = $_FILES['file_upload']['name'];

    // set upload folder name
    $upload_dir = "usr/" . $_SESSION['username'] . "/img";

    // Now lets move the file
    // move_uploaded_file returns false if something went wrong
    if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
        $message = "File uploaded successfully";
    } else {
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
    } // end of if

    $profile_image = '"' . $_SESSION['username'] . "/img" . "/" . $target_file . '"';
    $user_id = '"' . $_SESSION['user_id'] . '"';    

    $sql = "UPDATE user 
            SET profile_image = $profile_image 
            WHERE user_id = $user_id";

    $db->query($sql);
    unlink('usr/' . $_SESSION['profile_image']);
    $_SESSION['profile_image'] = $_SESSION['username'] . "/img" . "/" . $target_file;

}

