<?php
// call the session, check to see if user is logged in, set the page title
session_start();
require_once "inc/loggedin.inc.php";
$pageTitle = ucwords($_GET['bandname']);
// set the band_id from the GET data passed to this page from the band.php
$_SESSION['band_id'] = $_GET['band_id'];
require_once "layout/header.php";
?>


<body>
<!-- call navigation -->
    <?php require_once "layout/navbar.php"; ?>
    <div class="container-fluid">
        <!-- display band name and ways to edit band data -->
        <div class="riffcatcher-title-text"> 
            <h1>Band Members for <?php echo ucwords($_GET['bandname']) ?></h1>
            <hr>
            <a href="update-band.php">Edit band information and add members</a>
            <br><br>
            <a href="delete-band.php"><span class="error">Delete the band <?php echo ucwords($_GET['bandname']) ?></span></a>
        </div>
        <div class="display-band-files">
            <!-- Display the files from each of the members from the band -->
            <?php require_once "inc/band.info.inc.php";
            ?>
        </div>
    </div>
    <!-- call footer -->
    <?php include "layout/footer.php" ?>
</body>