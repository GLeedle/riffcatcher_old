<?php
$pageTitle = 'Login for Riff Catcher';
session_start();
require 'inc/login.inc.php';
require_once 'layout/header.php';
?>

<body>    
    <?php require_once "layout/navbar.php";
    var_dump($_SESSION); ?>
    <div class="full-page">
        <div class="container-fluid bg-dark mt-5 p-5 text-center rounded shadow w-50">
            <form class="mx-auto border border-secondary p-5" action="login.php" method="POST">
                <p class="registration-form">Not a member yet? <a href="register.php">Register here</a></p><br>
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" id="username">
                <br><br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password" required>
                <br><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
    <?php include_once 'layout/footer.php'; ?>
</body>