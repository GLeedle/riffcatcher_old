<?php
// is_logged_in.php
session_start();
if (isset($_SESSION['firstname'])) {
    echo json_encode(["status" => 'yes']);
} else {
    echo json_encode(["status" => 'no']);
}
