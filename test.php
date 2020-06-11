<?php 

$username = 'pheo';
$_SESSION['profile_image'] = "pheo/img/DSC00002.jpg";
unlink('usr/' . $_SESSION['profile_image']);

// copy('img/missing-profile-photo.png', 'usr/'. $username . '/img' . '/' . 'missing-profile-photo.png' );


?>