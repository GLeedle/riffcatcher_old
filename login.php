<?php
// start session to store login information, set page title
session_start();
$pageTitle = 'Login for Riff Catcher';
// call the php that will log the user in and set base session variables
require 'inc/login.inc.php';
require_once 'layout/header.php';
?>

<body>
    <!-- display login window -->
    <div class="login-page-bg">
        <div class="login-page">
            <div class="container-fluid p-5 text-center rounded shadow w-25 login-window">
                <form class="mx-auto border border-secondary p-5 login-form" action="login.php" method="POST">
                    <p><a href="index.php">Home</a></p>
                    <p class="registration-form">Not a member yet? <a href="register.php">Register here</a></p>

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
    </div>
    <!-- call footer -->
    <div class="login-footer">
        <?php include_once 'layout/footer.php'; ?>
    </div>
    <!-- js script to handle login issues -->
    <script src="js/loginError.js"></script>

</body>