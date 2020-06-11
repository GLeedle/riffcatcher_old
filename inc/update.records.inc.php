<?php

require_once "sql/db_connect.inc.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user WHERE user_id = $user_id";

$result = $db->query($sql);
// get the one row of data
while ($row = $result->fetch_assoc()) {

    $firstname_db = $row['firstname'];
    $lastname_db = $row['lastname'];
    $email_db = $row['email'];
    $password = $row['password'];
    $address_db = $row['address'];
    $city_db = $row['city'];
    $state_db = $row['state'];
    $zip_db = $row['zip'];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    if (empty($_POST['firstname'])) {
        $firstname = $firstname_db;
    } else {
        $firstname = $db->real_escape_string(ucwords(strtolower($_POST['firstname'])));
        $_SESSION['firstname'] = $_POST['firstname'];
    }

    if (empty($_POST['lastname'])) {
        $lastname = $lastname_db;
    } else {
        $lastname = $db->real_escape_string(ucwords(strtolower($_POST['lastname'])));
        $_SESSION['lastname'] = $_POST['lastname'];
    }

    if (empty($_POST['email'])) {
        $email = $email_db;
    } else {
        $email = $db->real_escape_string(strtolower($_POST['email']));
        $_SESSION['email'] = $_POST['email'];
    }

    $password = hash("sha512", $db->real_escape_string($_POST["password"]));

    if (empty($_POST['address'])) {
        $address = $address_db;
    } else {
        $address = $db->real_escape_string($_POST['address']);
        $_SESSION['address'] = $_POST['address'];
    }

    if (empty($_POST['city'])) {
        $city = $city_db;
    } else {
        $city = $db->real_escape_string(ucwords(strtolower($_POST['city'])));
        $_SESSION['city'] = $_POST['city'];
    }

    if (empty($_POST['state'])) {
        $state = $state_db;
    } else {
        $state = $db->real_escape_string(ucwords(strtolower($_POST['state'])));
        $_SESSION['state'] = $_POST['state'];
    }

    if (empty($_POST['zip'])) {
        $zip = $zip_db;
    } else {
        $zip = $db->real_escape_string(ucwords(strtolower($_POST['zip'])));
        $_SESSION['zip'] = $_POST['zip'];
    }





    $sql = "UPDATE user SET
    firstname = '$firstname',
    lastname = '$lastname',
    email = '$email',
    password = '$password',
    address = '$address',
    city = '$city',
    state = '$state',
    zip = '$zip'
    WHERE user_id = $user_id";

    echo $sql;

    $db->query($sql);

    header('Location: user-profile.php');
}
