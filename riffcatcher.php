<?php
session_start();
$pageTitle = "Welcome! " .  ucwords($_SESSION['username'] . "'s Riff Catcher Home");
require_once "layout/header.php";
require_once "functions/upload.files.php";
require_once "functions/display.files.php";

// var_dump($_SESSION)
?>

<body>
    <?php include "layout/navbar.php";
    ?>
    <div class="container-fluid mt-5 mb-5">
        <H1>Riff Catcher</H1>
        <h2><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></h2>
        <br><br>
        <?php if (!empty($message)) {
            echo "<p>{$message}</p>";
        } ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
            <input type="file" name="file_upload"><br><br>
            <!-- <input type="file" name="file_upload2"><br><br> -->
            <input type="submit" name="submit" value="Upload">
        </form>
        <br><br>

        <div><?php display_uploaded_files() ?> </div>

    </div> <?php include "layout/footer.php"; ?>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>