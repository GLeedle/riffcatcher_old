<?php
session_start();
$pageTitle = ucwords($_SESSION['username'] . "'s Bands");
require_once "layout/header.php";
require_once "inc/loggedin.inc.php";
?>

<body>
    <?php require_once "layout/navbar.php"; ?>
    <div class="band-img-bg"></div>
    <div class="container-fluid">
    <div class="riffcatcher-title-text">
            <H1><?php echo strtoupper($_SESSION['username']) ?>'s Band Page</H1>
            <!-- create a band and add members -->
            <hr>
            <a href="create-band.php">Create Band </a> <br>
        </div>


        <div class="band-list">
            <!-- Gather the lists of bands you're part of -->
            <?php include "inc/band.inc.php"; ?>

        </div>
    </div>

    <?php include "layout/footer.php" ?>
</body>

</html>