<div class="nav-wrapper">
  <nav class="nav-menu">
    <ul class="nav-menu">
      <li class="nav-item-top">
        <a class="site-logo" href="index.php">Riff Catcher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mt-3" href="riffcatcher.php">My Library of Riffs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mt-3" href="band.php">My Bands</a>
      </li>
    </ul>


    <div class="profile-img nav-img">
      <?php if (isset($_SESSION['username'])) {
        echo '<a href="user-profile.php">';
        echo '<img src="usr/' . $_SESSION['profile_image'] . '" ' . 'height="50" width="50" alt="profile photo of ' . $_SESSION['username'] . '">';
      } else {
        echo "<a href=\"login.php\"><img src=\"img/missing-profile-photo.png\" height=\"50\" width=\"50\" alt=\"Missing profile Image\"></a>";
        echo '&nbsp;&nbsp;<a class="not-logged-in" href="login.php">Not Logged in</a>';
      }
      ?>
      <a class="nav-btn" id="login" href="login.php">Login</a>&nbsp;&nbsp;
      <a class="nav-btn" id="logout" href="inc/logout.ajax.inc.php">Logout</a>
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
  </nav>
</div>
<script src="js/script.js"></script>