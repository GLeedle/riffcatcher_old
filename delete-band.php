<?php
// start session variable, set page title
session_start();
require_once "inc/loggedin.inc.php";
$pageTitle = "Delete " . ucwords($_SESSION['username']) . "?";
include_once "layout/header.php";
// call the php to delete band
require_once "inc/delete.band.inc.php";
?>

<body>
    <div class="registration-page-bg">
        <!-- display window to verify deletion of band -->
        <div id="login"></div>
        <div id="logout"></div>
        <div class="registration-page">
            <div class="container-fluid">
                <div class="riffcatcher-title-text delete-page submit-secondaryclr-btn">
                    <form action="delete-band.php" method="post">
                        <h5>Are you sure you want to delete the band <?php echo ucwords($_SESSION['bandname']); ?>?</h5>
                        Yes, Delete the band <?php echo $_SESSION['bandname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Delete Band" class="btn btn-outline-danger">&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-outline-secondary" type="button" value="Cancel" onclick="window.location.href = 'band.php'">
                    </form>
                </div>
                <!-- call footer -->
                <?php include "layout/footer.php" ?>
            </div>
</body>