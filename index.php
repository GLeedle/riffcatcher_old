<?php
session_start();
$pageTitle = "Riff Catcher";
require_once "layout/header.php";
?>

<body>
    <?php include "layout/navbar.php"; ?>
    <div class="hero-img">
        <!-- <img src="img/stage-bg.jpg" alt="On the Stage"> -->
    </div>
    <div class="container-fluid mb-5">
        <!-- <div class="riffcatcher-title-main">
            <h1>Riff Catcher</h1>
            <h6>Catching riffs, one dream at a time</h6>
        </div> -->
        <br><br>
        <div class="main-page-text">
            <p>Welcome to &copy;Riffcatcher, your own library of riffs and ideas. </P>
            <p>Have you ever wanted one place to record and store musical riffs or ideas and share those ideas with friends around the world?</p>
            <p></p>
            <p>With Riff Catcher you can <a href="register.php">sign up</a> for a free account and begin recording ideas using the microphone on your PC. Don't wait, get started today!</p>
            <p>collaborate with friends, join bands and share ideas with others. It's a social network for artists like no other and best of all, it's free!</p>
        </div>
        <br><br>
        <div class="sign-up-text">
            <h2>Sign up is quick and easy</h2>
            <p>Sign up only takes a few minutes and you could be off and recording those song ideas you've had bouncing around in your head.</p>
            <ol>
                <li>Click on <a href="register.php">register</a> to get started.</li>
                <li><a href="login.php">Login</a> and start writing riffs.</li>
            </ol>
            <p>And that's it! You're well on your way to writing the next big hit! Have fun and find others to collaborate with, form a new band with friends and most of all, have fun!</p>
        </div>
    </div>


    <?php include_once "layout/footer.php" ?>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>