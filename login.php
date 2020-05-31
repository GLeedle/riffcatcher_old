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
                <label for="username">Username</label><span data-field data-username> &nbsp;&nbsp;( Please enter a username )</span>
                <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="<?php echo isset($username) ? $username : ""; ?>">
                <br><br>
                <label for="password">Password</label><span data-field data-password> &nbsp;&nbsp;( Please enter a password )</span>
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                <br><br>
                <input class="btn btn-primary" type="submit" value="Login" id="submit">
            </form>
        </div>
    </div>
    <?php include_once 'layout/footer.php'; ?>
    <script src="js/loginError.js"></script>
    
</body>