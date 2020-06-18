<?php
// connect to database
require_once "sql/db_connect.inc.php";

// makes sure this is POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // set variable from the $_POST data
    $username = $db->real_escape_string(strtolower($_POST["username"]));
    $firstname = $db->real_escape_string(ucwords(strtolower($_POST["firstname"])));
    $lastname = $db->real_escape_string(ucwords(strtolower($_POST["lastname"])));
    $email = $db->real_escape_string(strtolower($_POST["email"]));
    $password = hash("sha512", $db->real_escape_string($_POST["password"]));
    $address = $db->real_escape_string($_POST['address']);
    $city = $db->real_escape_string(ucwords(strtolower($_POST['city'])));
    $state = $db->real_escape_string(ucwords(strtolower($_POST['state'])));
    $zip = $db->real_escape_string($_POST['zip']);
    $phone = $db->real_escape_string($_POST['phone']);
    $profile_image = $username . '/img/missing-profile-photo.png';

    // insert into the riffcatcher database these columns using the new variables set above
    $sql = "INSERT INTO user (username,firstname,lastname,email,password,address,city,state,zip,phone,profile_image) 
            VALUES('$username','$firstname','$lastname','$email','$password','$address','$city','$state','$zip','$phone','$profile_image')";


    // echo $sql;
    $result = $db->query($sql);

    // Create user directories to be used for the site
    if (!is_dir('usr/' . $username)) {
        mkdir('usr/' . $username);
        mkdir('usr/' . $username . '/upload');
        mkdir('usr/' . $username . '/deleted');
        mkdir('usr/' . $username . '/img');
        copy('img/missing-profile-photo.png', 'usr/'. $username . '/img' . '/' . 'missing-profile-photo.png' );
        header('Location:login.php');
    }


    if (!$result) {
        echo "<div class=\"alert-danger w-25 mt-5 p-2 mx-auto text-center rounded shadow\">There was a problem registering your account, Please try again</div>";
    } else {
        echo "<div class=\"alert-success w-25 mt-5 p-2 mx-auto text-center rounded shadow\">Thank you for registering " . $firstname . ", Please <a href=\"login.php\">Login</a></div>";
        echo '<div class=\"login btn btn-primary mx-auto\"><a href="login.php" title="Login Page">Login</a></div>';
        header('Location:login.php');
    }
}
