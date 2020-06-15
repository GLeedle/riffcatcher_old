<?php
session_start();
$pageTitle = ucwords($_SESSION['username'] . "'s Bands");
require_once "layout/header.php";
require_once "layout/navbar.php";

?>

<body>
    <div class="container-fluid mt-5 mb-5 mx-auto shadow w-75 bg-dark rounded">
        <!-- create a band and add members -->
        <a href="create-band.php">Create Band </a> <br>

        <!-- Gather the lists of bands you're part of -->
        <?php include "inc/band.inc.php"; ?>
        <!-- display all of the files from the various members of the band -->
    </div>

    <?php include "layout/footer.php" ?>
</body>

</html>