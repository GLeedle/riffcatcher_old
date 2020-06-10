<?php
// login.php
// session_destroy();

// connect to the DB
require_once 'sql/db_connect.inc.php';

// Make sure this is POST data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // setting a username and hashing the password
    $username = $db->real_escape_string($_POST['username']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    // match username and password to user from the DB
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    // execute query above
    $result = $db->query($sql);

    // storing information from the DB inside the $_SESSION
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedin'] = 1;
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['firstname'] = $row['firstname'];  
        $_SESSION['lastname'] = $row['lastname'];  
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['profile_image'] = $row['profile_image'];

        print_r($row);
        // Redirect to the users home page
        header('location: riffcatcher.php');
    } else {
        echo '<p class="text-center bg-danger p-2 m-0">Incorrect username and or password, please try again or click here to <a href="register.php">Register</p>';
    }
    
}

?>