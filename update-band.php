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

            <label for="bandname">Create or change band Name</label>
            <input class="form-control" type="text" id="bandname" name="bandname" value="<?php echo (isset($bandname_db) ? $bandname_db : ''); ?>">
            <br>
            <!-- <label for="bandmember">Add User to Band</label>
            <br>
            <select name="bandmember" id="bandmember">Band Member</select>
            <option value=""></option> -->
            <label for="banddesc"></label>
            <textarea class="form-control" name="banddesc" id="banddesc"></textarea>
            <br>
            <label for="genre">Choose Genre</label>
            <select name="genre" id="genre">
                <option value="" <?php if ($genre_db == "-- Select Degree Program --") echo ' selected="selected"'; ?>>-- Select Genre --</option>
                <option value="2" <?php echo $genre_db == "2" ? ' selected="selected"' : ''; ?>>Rock</option>
                <option value="3" <?php if ($genre_db == "3") echo ' selected="selected"'; ?>>Pop</option>
                <option value="5" <?php if ($genre_db == "5") echo ' selected="selected"'; ?>>Rap</option>
                <option value="6" <?php if ($genre_db == "6") echo ' selected="selected"'; ?>>Heavy Metal</option>
                <option value="7" <?php if ($genre_db == "7") echo ' selected="selected"'; ?>>R&B/Hip-Hop</option>
            </select>
            <br>
            <input type="submit" value="Save Band">

            <?php include "layout/footer.php" ?>
</body>

</html>