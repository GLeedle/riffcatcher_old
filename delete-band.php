<?php
session_start();
require_once "inc/loggedin.inc.php";
$pageTitle = "Delete " . ucwords($_SESSION['username']) . "?";
include_once "layout/header.php";
require_once "inc/delete.band.inc.php";
?>

<body>
    <div class="registration-page-bg">
        <div id="login"></div>
        <div id="logout"></div>
        <div class="registration-page">
            <div class="container-fluid">
                <div class="riffcatcher-title-text delete-page submit-secondaryclr-btn">
                    <form action="delete-band.php" method="post">
                        <h5>Are you sure you want to delete the band <?php echo ucwords($_SESSION['bandname']); ?>?</h5>
                        Yes, Delete the band <?php echo $_SESSION['bandname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-outline-primary">&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-outline-secondary" type="button" value="Cancel" onclick="window.location.href = 'band.php'">
                    </form>
                </div>
                <?php include "layout/footer.php" ?>
            </div>
</body>