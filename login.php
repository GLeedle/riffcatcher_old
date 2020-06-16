<?php
$pageTitle = 'Login for Riff Catcher';
session_start();
require 'inc/login.inc.php';
require_once 'layout/header.php';
?>

<body>
    <?php // require_once "layout/navbar.php";
    // var_dump($_SESSION); 
    ?>
    <div class="login-page">
        <div class="container-fluid p-5 text-center rounded shadow w-25 login-window">
            <form class="mx-auto border border-secondary p-5 login-form" action="login.php" method="POST">
                <p class="registration-form">Not a member yet? <a href="register.php">Register here</a></p>
                <p><a href="index.php">Home</a></p><br>

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
    <div class="login-footer">
        <?php include_once 'layout/footer.php'; ?>
    </div>
    <script src="js/loginError.js"></script>

</body>