<?php

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
// Connect to the Database
// require_once "sql/db_connect.inc.php";
// var_dump($_FILES['audio_data']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();
    var_dump($_FILES);
    var_dump($_SESSION);
    // what file do we need to move?
    $tmp_file = $_FILES['audio_data']['tmp_name'];

    // set target file name
    // basename gets just the file name
    $target_file = basename($_FILES['audio_data']['name'] . ".wav");

    // set upload folder name
    $upload_dir = 'usr/' . $_SESSION['username'] . '/recording';
    // $upload_dir = 'c:\xampp\htdocs\ctec227\riffcatcher\usr\\' . $_SESSION['username'] . '\recording';

    if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
        $message = "File uploaded successfully";
    } else {
        $error = $_FILES['audio_data']['error'];
        $message = $upload_errors[$error];
    } // end of if

}

?>




