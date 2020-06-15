<?php
session_start();
$pageTitle = ucwords($_SESSION['username'] . "'s Band creator");
require_once "inc/loggedin.inc.php";
require_once "layout/header.php";
require_once "layout/navbar.php";
require_once "inc/create.band.inc.php";
?>

<body>
    <div class="container-fluid mt-5 mb-5 mx-auto shadow w-75 bg-dark rounded">

        <form class="form-group text-left w-75 mx-auto" action="create-band.php" method="POST">

            <label for="bandname">Create Band Name</label>
            <input class="form-control" type="text" id="bandname" name="bandname" value="<?php echo (isset($bandname_db) ? $bandname_db : ''); ?>">
            <br>
            <label for="banddesc"></label>
            <textarea class="form-control" name="banddesc" id="banddesc"></textarea>
            <br>
            <label for="genre">Choose Genre</label>
            <select name="genre" id="genre">
                <option value="">-- Select Genre --</option>
                <option value="2">Rock</option>
                <option value="3">Pop</option>
                <option value="5">Rap</option>
                <option value="6">Heavy Metal</option>
                <option value="7">R&B/Hip-Hop</option>
            </select>
            <br>
            <input type="submit" value="Save Band">
            

            <?php include "layout/footer.php" ?>
</body>

</html>