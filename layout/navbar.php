<nav class="nav shadow bg-dark">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" href="index.php">Riff Catcher</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mt-3" href="riffcatcher.php">My Library of Riffs</a>
    </li>


  </ul>
  <a class="btn btn-success mt-3 p-1 h-25" id="login" href="login.php">Login</a>&nbsp;&nbsp;
  <a class="btn btn-danger mt-3  p-1 h-25" id="logout" href="inc/logout.ajax.inc.php">Logout</a>
  <div class="profile-img nav-img">
    <a href="user-profile.php">
      <img src="<?= "usr/" . $_SESSION['profile_image'] ?>" height="50" width="50" alt="n/a">
    </a>
  </div>
  <div class="nav-profile">
    <a href="user-profile.php">
      <p><?php echo $_SESSION['username']; ?>
        <br>
        <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
        <br>
        <?php echo $_SESSION['email']; ?> </p>
    </a>
  </div>
</nav>
<script src="js/script.js"></script>