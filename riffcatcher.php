<?php
session_start();
$pageTitle = "Welcome! " .  ucwords($_SESSION['username'] . "'s Riff Catcher Home");
require_once "layout/header.php";
require_once "inc/upload.files.inc.php";
require_once "functions/display.files.php";

// var_dump($_SESSION)
?>

<body>
    <?php include "layout/navbar.php";
    ?>
    <div class="container-fluid mt-5 mb-5 mx-auto shadow w-75 bg-dark rounded">
        <H1>Riff Catcher</H1>
        <h2><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></h2>
        <br><br>
        <?php if (!empty($message)) {
            echo "<p>{$message}</p>";
        } ?>
        <p><strong>To record a file:</strong></p>

        <div id="controls">
            <button class="btn btn-outline-success" id="recordButton">Record</button>&nbsp;&nbsp;
            <button class="btn btn-outline-danger pl-4 pr-4" id="stopButton" disabled>Stop</button>&nbsp;&nbsp;
            <button class="btn btn-outline-warning pl-3 pr-3" id="pauseButton" disabled>Pause</button><br><br>


            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="preview-zone hidden">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <div><b>Preview File below</b></div>
                        </div>
                        <div class="box-body"></div>
                    </div>
                </div>

                <div id="formats">Format: Hit record above, sample rate will display here</div><br>
                <ul id="recordingsList"></ul>

                <div class="dropzone-wrapper">
                    <div class="dropzone-desc">
                        <p>Drag a file or click Here to upload an audio file</p>
                    </div>
                    <input type="file" accept=".mp3,.wav" name="file_upload" class="dropzone">
                    <br><br><br>
                    <input class="btn btn-outline-success" type="submit" name="submit" value="Upload File from PC">
                </div>
            </form>
            <br><br><br>
            <div class="jumbotron text-white text-center p-2 bg-info">
                <h1>Uploaded files for user <?php echo $_SESSION['username']; ?> </h1>
            </div>
            <div id="display-files"><?php display_uploaded_files() ?></div>


        </div> <?php include "layout/footer.php"; ?>
        <!-- jQuery -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/recorder.js"></script>
        <script src="js/app.js"></script>
        <script src="js/script.js"></script>
</body>

</html>