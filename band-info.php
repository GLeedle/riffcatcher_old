<?php
session_start();
require_once "inc/loggedin.inc.php";
$pageTitle = ucwords($_GET['bandname']);
$_SESSION['band_id'] = $_GET['band_id'];
require_once "layout/header.php";
?>


<body>
    <?php require_once "layout/navbar.php"; ?>
    <div class="container-fluid">
        <div class="riffcatcher-title-text"> 
            <h1>Band Members for <?php echo ucwords($_GET['bandname']) ?></h1>
            <hr>
            <a href="update-band.php">Edit band information and add members</a>
            <br><br>
            <a href="delete-band.php"><span class="error">Delete the band <?php echo ucwords($_GET['bandname']) ?></span></a>
        </div>
        <div class="display-band-files">
            <?php require_once "inc/band.info.inc.php";
            ?>
        </div>
    </div>
    <?php include "layout/footer.php" ?>
</body>