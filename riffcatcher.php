<?php
// start session variable, set page title
session_start();
$pageTitle = "Welcome! " .  strtoupper($_SESSION['username'] . "'s RiffCatcher Home");
require_once "layout/header.php";
// call php file that will handle uploads to the server
require_once "inc/upload.files.inc.php";
// call the function used to display the files
require_once "functions/display.files.php";
// make sure the user is logged in or redirect to login page
require_once "inc/loggedin.inc.php";
?>

<body>
    <!-- call navigation bar -->
    <?php include "layout/navbar.php"; ?>
    <!-- Display the user name -->
    <div class="riffcatcher-page container-fluid mx-auto">
        <div class="riffcatcher-title-text">
            <H1><?php echo strtoupper($_SESSION['username']) ?>'s RiffCatcher</H1>
        </div>
        <!-- display the buttons used to record from the users microphone -->
        <div class="record-controls">
            <p><strong>To record a file, hit Record:</strong></p>
            <div id="controls">
                <button class="btn btn-outline-success riffcatcher-btn" id="recordButton"><i class="fas fa-microphone"></i>&nbsp;Record</button>&nbsp;&nbsp;
                <button class="btn btn-outline-danger pl-4 pr-4 riffcatcher-btn" id="stopButton" disabled><i class="fas fa-stop-circle"></i>&nbsp;Stop</button>&nbsp;&nbsp;
                <button class="btn btn-outline-warning pl-3 pr-3 riffcatcher-btn" id="pauseButton" disabled><i class="fas fa-pause"></i>&nbsp;Pause</button><br><br>
            </div>
        </div>
        <!-- displays the recording once the user hits stop -->
        <div id="formats">Format: Hit record above, sample rate will display here</div><br>
        <ul id="recordingsList"></ul>
        <!-- handles the upload of the file submitted from the users PC -->
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="preview-zone hidden">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <!-- preview section that js will display -->
                        <div><b>Preview File below</b></div>
                    </div>
                    <div class="box-body"></div>
                </div>
            </div>
            <!-- Area for user to either drag and drop file or click to upload from PC -->
            <div class="dropzone-wrapper">
                <div class="dropzone-desc">
                    <p>Drag a file or click Here to upload an audio file</p>
                </div>
                <input type="file" accept=".mp3,.wav" name="file_upload" class="dropzone">
                <br><br><br>

                <input class="btn btn-outline-success upload-file-btn" type="submit" name="submit" value="Upload File from PC">
            </div>
        </form>
        <br><br><br>
        <div class="riffcatcher-title-text">
            <h1><?php echo strtoupper($_SESSION['username']); ?>'s Riff Ideas </h1>
        </div>
        <!-- call function to display files of current user -->
        <div id="display-files"><?php display_uploaded_files() ?></div>
    </div>
    <!-- call footer -->
    <?php include "layout/footer.php"; ?>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- js script necessary for recording app.js uses this file -->
    <script src="js/recorder.js"></script>
    <!-- js script  that records audio and displays the results-->
    <script src="js/app.js"></script>
    <!-- js script that the dropzone uses for drag and drop of files -->
    <script src="js/script.js"></script>
</body>

</html>