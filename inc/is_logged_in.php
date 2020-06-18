<?php
// start session
session_start();
//check to see if user is logged in and set status variable
if (isset($_SESSION['firstname'])) {
    echo json_encode(["status" => 'yes']);
} else {
    echo json_encode(["status" => 'no']);
}
