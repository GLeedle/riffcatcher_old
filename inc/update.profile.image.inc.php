<?php
// connects to database
require_once "sql/db_connect.inc.php";

// checks to make sure this POST data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // what file do we need to move?
    $tmp_file = $_FILES['file_upload']['tmp_name'];

    // set target file name
    // basename gets just the file name
    $target_file = basename($_FILES['file_upload']['name']);
    // $_SESSION['profile_image'] = $_FILES['file_upload']['name'];

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
    // sets variable of new file uploaded
    $profile_image = '"' . $_SESSION['username'] . "/img" . "/" . $target_file . '"';
    $user_id = '"' . $_SESSION['user_id'] . '"';    
    // updates the database with that file name 
    $sql = "UPDATE user 
            SET profile_image = $profile_image 
            WHERE user_id = $user_id";
    // queries database
    $db->query($sql);

    // echo var_dump($_SESSION);
    unlink('usr/' . $_SESSION['profile_image']);
    // sets the new profile image name to the session variable
    $_SESSION['profile_image'] = $_SESSION['username'] . "/img" . "/" . $target_file;
    // redirects to the user page
    header('Location: user-profile.php');
    
}

