<?php
session_start();
require_once "inc/loggedin.inc.php";
$pageTitle = "Delete " . ucwords($_SESSION['username']) . "?";
include_once "layout/header.php";
require_once "inc/delete.profile.inc.php";
?>

<body>
    <div class="registration-page-bg">
    <div id="login"></div>
    <div id="logout"></div>
        <div class="registration-page">
        <div class="container-fluid">
        <div class="riffcatcher-title-text delete-page submit-secondaryclr-btn">
        <form action="delete-profile.php" method="post">
            <h5>Are you sure you want to delete user <?php echo ucwords($_SESSION['username']);?>?</h5>
         Yes, Delete User <?php echo strtoupper($_SESSION['username']);?>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-outline-primary">&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-outline-secondary" type="button" value="Cancel" onclick="window.location.href = 'user-profile.php'">
        </form>
        </div>
        <?php include "layout/footer.php" ?>
    </div>
</body>