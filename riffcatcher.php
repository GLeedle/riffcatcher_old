<?php
session_start();
$pageTitle = "Welcome! " .  strtoupper($_SESSION['username'] . "'s Riff Catcher Home");
require_once "layout/header.php";
require_once "inc/upload.files.inc.php";
require_once "functions/display.files.php";
require_once "inc/loggedin.inc.php";
?>

<body>
    <?php include "layout/navbar.php"; ?>
    <div class="riffcatcher-page container-fluid mx-auto">
        <div class="riffcatcher-title-text">
            <H1><?php echo strtoupper($_SESSION['username']) ?>'s Riff Catcher</H1>
        </div>

        <div class="record-controls">
            <p><strong>To record a file, hit Record:</strong></p>
            <div id="controls">
                <button class="btn btn-outline-success" id="recordButton"><i class="fas fa-microphone"></i>&nbsp;Record</button>&nbsp;&nbsp;
                <button class="btn btn-outline-danger pl-4 pr-4" id="stopButton" disabled><i class="fas fa-stop-circle"></i>&nbsp;Stop</button>&nbsp;&nbsp;
                <button class="btn btn-outline-warning pl-3 pr-3" id="pauseButton" disabled><i class="fas fa-pause"></i>&nbsp;Pause</button><br><br>
            </div>
        </div>
        <div id="formats">Format: Hit record above, sample rate will display here</div><br>
        <ul id="recordingsList"></ul>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="preview-zone hidden">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <div><b>Preview File below</b></div>
                    </div>
                    <div class="box-body"></div>
                </div>
            </div>


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