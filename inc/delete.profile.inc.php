<?php
// connect to database
require_once "sql/db_connect.inc.php";
// set variable for user_id
$user_id = $_SESSION['user_id'];
// make sure this is POST data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// make 4 calls to the database to delete data for the user
        $sql =  "DELETE 
                    FROM riff
                    WHERE user_id = $user_id";
        $db->query($sql);
        sleep(1);
        $sql =  "DELETE
                    FROM band
                    WHERE user_id = $user_id";
        $db->query($sql);
        sleep(1);
        $sql =  "DELETE
                    FROM band_member
                    WHERE user_id = $user_id";
        $db->query($sql);
        sleep(1);
        $sql =  "DELETE
                    FROM user
                    WHERE user_id = $user_id";
        $db->query($sql);
        // destroy the session variable, logging the user out
        sleep(1);
        session_destroy();
        // set variable to user directory
        $usrDir = "usr/" . $_SESSION['username'];
        // gather the files in each directory, remove those files then remove the directory once they're empty
        $files = glob($usrDir . "/upload/*");
        foreach ($files as $file) {
                if (is_file($file)) {
                        unlink($file);
                }
        }
        rmdir("usr/" . $_SESSION['username'] . "/upload");

        $files = glob($usrDir . "/img/*");
        foreach ($files as $file) {
                if (is_file($file)) {
                        unlink($file);
                }
        }
        rmdir("usr/" . $_SESSION['username'] . "/img");

        $files = glob($usrDir . "/deleted/*");
        foreach ($files as $file) {
                if (is_file($file)) {
                        unlink($file);
                }
        }
        rmdir("usr/" . $_SESSION['username'] . "/deleted");
        // pause the script long enough to complete the deletions then remove the user directory
        sleep(1);
        rmdir("usr/" . $_SESSION['username']);
        // redirect to the home page
        header('Location: index.php');
}
