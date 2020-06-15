<?php
session_start();
$pageTitle = "Riff Catcher";
require_once "layout/header.php";
?>

<body>
    <?php include "layout/navbar.php"; ?>
    <div class="container-fluid mt-5 mb-5 mx-auto shadow w-75  rounded">
        <h1>Riff Catcher</h1>
        <a href="riffcatcher.php">Go to my library</a>

    </div>
    <?php include_once "layout/footer.php" ?>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>