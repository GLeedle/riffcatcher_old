<?php
session_start();
$pageTitle = ucwords($_GET['bandname']);
require_once "layout/header.php";
require_once "layout/navbar.php";
require_once "inc/loggedin.inc.php";
?>


<body>
    <div class="container-fluid">
        <div class="riffcatcher-title-text"> 
            <h1>Band Members for <?php echo ucwords($_GET['bandname']) ?></h1>
            <hr>
            <a href="update-band.php">Edit band and add members</a>
        </div>
        <div class="display-band-files">
            <?php require_once "inc/band.info.inc.php";
            ?>
        </div>
    </div>
    <?php include "layout/footer.php" ?>
</body>