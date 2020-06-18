<?php
// call the Session variable, set the page title, check to see if the user is logged in
session_start();
$pageTitle = ucwords($_SESSION['username'] . "'s Band creator");
require_once "inc/loggedin.inc.php";
require_once "layout/header.php";
require_once "layout/navbar.php";
// call the php for band creation
require_once "inc/create.band.inc.php";
?>

<body>
    <div class="container-fluid m-0 p-0">
            <div class="band-creator-form">
                <div class="riffcatcher-title-text">
                    <h1>Welcome to the Band creator</h1>
                    <!-- form to create Band options -->
                    <form class="form-group text-left w-75 mx-auto" action="create-band.php" method="POST">
                        <label for="bandname">Create Band Name</label>
                        <input class="form-control" type="text" id="bandname" name="bandname" value="<?php echo (isset($bandname_db) ? $bandname_db : ''); ?>">
                        <br>
                        <label for="banddesc">Band Description</label>
                        <textarea class="form-control" name="banddesc" id="banddesc"></textarea>
                        <br>
                        <label for="genre">Choose Genre</label>
                        <select class="form-control" name="genre" id="genre">
                            <option value="">-- Select Genre --</option>
                            <option value="2">Rock</option>
                            <option value="3">Pop</option>
                            <option value="5">Rap</option>
                            <option value="6">Heavy Metal</option>
                            <option value="7">R&B/Hip-Hop</option>
                            <option value="8">Punk</option>
                            <option value="9">Electronic</option>
                            <option value="10">Jazz</option>
                            <option value="11">Country</option>
                            <option value="12">Reggae</option>
                            <option value="13">Alternative</option>
                            <option value="14">Dub-Step</option>
                        </select>
                        <br>
                        <input class="btn submit-secondaryclr-btn btn-outline-primary" type="submit" value="Save Band">
                </div>
            </div>
        </div>
        <!-- set footer -->
    <?php include "layout/footer.php" ?>
</body>

</html>