<?php

require_once "sql/db_connect.inc.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $db->real_escape_string(strtolower($_POST["username"]));
    $email = $db->real_escape_string(strtolower($_POST["email"]));
    $firstname = $db->real_escape_string(ucwords(strtolower($_POST["firstname"])));
    $lastname = $db->real_escape_string(ucwords(strtolower($_POST["lastname"])));
    $password = hash("sha512", $db->real_escape_string($_POST["password"]));

    $sql = "INSERT INTO user (username,email,firstname,lastname,password) 
                    VALUES('$username','$email','$firstname','$lastname','$password')";
                    

    // echo $sql;
    $result = $db->query($sql);
    

    if (!is_dir('usr/' . $username)){
        mkdir('usr/' . $username);
        mkdir('usr/' . $username . '/upload');
        mkdir('usr/' . $username . '/deleted');
        mkdir('usr/' . $username . '/recording');
        header('Location:login.php');
    }

    if (!$result) {
        echo "<div class=\"alert-danger w-25 mt-5 p-2 mx-auto text-center rounded shadow\">There was a problem registering your account, Please try again</div>";
    } else {
        echo "<div class=\"alert-success w-25 mt-5 p-2 mx-auto text-center rounded shadow\">Thank you for registering " . $firstname . ", Please Login</div>";
        echo '<div class=\"login btn btn-primary mx-auto\"><a href="login.php" title="Login Page">Login</a></div>';
    }

    

    unset($username);
    unset($email);
    unset($first_name);
    unset($last_name);
}


