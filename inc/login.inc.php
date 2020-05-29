<?php
// login.php
// session_destroy();
$pageTitle = 'Login';

require_once 'sql/db_connect.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $db->real_escape_string($_POST['username']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    echo $sql;


    $result = $db->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedin'] = 1;
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['first_name'] = $row['first_name'];  

        print_r($row);

        header('location: index.php');
    } else {
        echo '<p>Please try again or go away</p>';
    }
    
}

?>