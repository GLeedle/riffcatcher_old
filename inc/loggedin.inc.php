<?php
if (!$_SESSION['username']) {
    header('location: login.php');
} else {
    header('location: riffcatcher.php');
}

// if (isset($_SESSION['firstname'])) {
//     echo json_encode(["status" => 'yes']);
// } else {
//     echo json_encode(["status" => 'no']);
// }


