<?php
session_start();
$pageTitle = ucwords($_GET['bandname']);
require_once "layout/header.php";
require_once "layout/navbar.php";
require_once "inc/loggedin.inc.php";
?>


<body>
    <div class="container-fluid mt-5 mb-5 mx-auto shadow w-75 bg-dark rounded">
        <a href="update-band.php">Edit band and add members</a>
        <?php require_once "inc/band.info.inc.php";
        ?>
    </div>
    <?php include "layout/footer.php" ?>
</body>