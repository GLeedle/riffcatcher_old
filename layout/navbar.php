<nav class="nav-wrapper">
    <ul class="nav-menu pt-4">
        <li class="nav-item ">
            <a class="nav-link-logo" href="index.php"><h1>Riff Catcher</h1></a>
        </li>
    </ul>
    <ul class="nav-menu pt-4">
        <li class="nav-item-library">
            <a class="nav-link" href="riffcatcher.php"><i class="far fa-play-circle"></i>&nbsp;My Library of Riffs</a>
        </li>
    </ul>


    <div class="profile-img nav-img">
        <?php if (isset($_SESSION['username'])) {
            echo '<a href="update-profile-image.php">';
            echo '<img src="usr/' . $_SESSION['profile_image'] . '" ' . 'height="50" width="50" alt="profile photo of ' . $_SESSION['username'] . '"></a>';
        } else {
            echo '<a class="not-logged-in" href="login.php">Not Logged in</a>';
            echo "<a href=\"login.php\"><img src=\"img/missing-profile-photo.png\" height=\"50\" width=\"50\" alt=\"Missing profile Image\"></a>";
        }
        ?>
    </div>



    <div class="nav-profile">
        

        <ul>
            <li><?php echo (isset($_SESSION['username'])) ? "<span class=\"profile-header-text\">User: </span>" . strtoupper($_SESSION['username']) : ""; ?></li>
            <li><?php echo (isset($_SESSION['firstname'])) ? "<span class=\"profile-header-text\">Name: </span>" . $_SESSION['firstname'] . " " . $_SESSION['lastname'] :  ""; ?></li>
            <li><?php echo (isset($_SESSION['email'])) ? "<span class=\"profile-header-text\">Email: </span>" . $_SESSION['email'] : ""; ?></li>
            <li><?php echo (isset($_SESSION['email'])) ? "<a href=\"user-profile.php\">Edit Profile</li></a>" : ""; ?>
        </ul>
    </div>



    <ul class="nav-menu pt-4">
        <li class="nav-item-bands">
            <a class="nav-link" href="band.php"><i class="fas fa-music"></i>&nbsp;My Bands</a>
        </li>
    </ul>


    <div class="login-btn">
        <a class="btn btn-outline-success nav-login-btn" id="login" href="login.php">Login</a>
    </div>
    <div class="logout-btn">
        <a class="nav-logout-btn btn btn-outline-danger" id="logout" href="inc/logout.ajax.inc.php">Logout</a>
    </div>

</nav>
<script src="js/script.js"></script>