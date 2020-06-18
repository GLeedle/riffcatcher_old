<?php
// session start to access session data, set the page title and call the .php files needed
session_start();
$pageTitle = ucwords($_SESSION['username'] . "'s Bands");
require_once "layout/header.php";
require_once "inc/loggedin.inc.php";
?>

<body>
<!-- call the navigation  -->
    <?php require_once "layout/navbar.php"; ?>
    <div class="band-img-bg"></div>
    <div class="container-fluid">
    <div class="riffcatcher-title-text">
            <!-- echo out the bandname that was stored in the SESSION variable -->
            <H1><?php echo strtoupper($_SESSION['username']) ?>'s Band Page</H1>
            <!-- create a band and add members -->
            <hr>
            <a href="create-band.php">Create Band </a> <br>
        </div>


        <div class="band-list">
            <!-- Gather the lists of bands user is part of -->
            <?php include "inc/band.inc.php"; ?>

        </div>
    </div>
    <!-- call footer -->
    <?php include "layout/footer.php" ?>
</body>

</html>