<?php
// checks to make sure user is logged in and if not redirects to login page
if (empty($_SESSION['username'])) {
    header('location: login.php');
} 



