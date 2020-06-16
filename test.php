<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="test.css">
    <title>test design</title>
</head>

<body>



    <nav class="nav-wrapper">
        <ul class="nav-menu">
            <li class="nav-item ">
                <a class="nav-link-logo" href="index.php">Riff Catcher</a>
            </li>
        </ul>
        <ul>
            <li class="nav-item-library">
                <a class="nav-link" href="riffcatcher.php">My Library of Riffs</a>
            </li>
        </ul>
        <ul>
            <li class="nav-item-bands">
                <a class="nav-link mt-3 " href="band.php">My Bands</a>
            </li>
        </ul>


        <div class="profile-img nav-img ">
            <?php if (isset($_SESSION['username'])) {
                echo '<a href="user-profile.php">';
                echo '<img src="usr/' . $_SESSION['profile_image'] . '" ' . 'height="50" width="50" alt="profile photo of ' . $_SESSION['username'] . '">';
            } else {
                echo '&nbsp;&nbsp;<a class="not-logged-in" href="login.php">Not Logged in</a>';
                echo "<a href=\"login.php\"><img src=\"img/missing-profile-photo.png\" height=\"50\" width=\"50\" alt=\"Missing profile Image\"></a>";
            }
            ?>
        </div>

        <div class="nav-profile">
            <a href="user-profile.php">
                <p><?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ""; ?>
                    <br>
                    <?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] . " " . $_SESSION['lastname'] :  ""; ?>
                    <br>
                    <?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ""; ?> </p>
            </a>
        </div>

        <div class="login-btn">
        <a class="nav-login-btn btn btn-success" id="login" href="login.php">Login</a>
        </div>
        <div class="logout-btn">
            <a class="nav-logout-btn btn btn-danger" id="logout" href="inc/logout.ajax.inc.php">Logout</a>
        </div>

    </nav>


    <script src="js/script.js"></script>
</body>

</html>