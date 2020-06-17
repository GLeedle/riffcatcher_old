<?php
require_once "sql/db_connect.inc.php";

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $sql =  "DELETE 
                    FROM riff
                    WHERE user_id = $user_id";
        $db->query($sql);

        $sql =  "DELETE
                    FROM band
                    WHERE user_id = $user_id";
        $db->query($sql);

        $sql =  "DELETE
                    FROM band_member
                    WHERE user_id = $user_id";
        $db->query($sql);

        $sql =  "DELETE
                    FROM user
                    WHERE user_id = $user_id";
        $db->query($sql);

        session_destroy();

        $usrDir = "usr/" . $_SESSION['username'];

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

        sleep(1);
        rmdir("usr/" . $_SESSION['username']);

        header('Location: index.php');
}
