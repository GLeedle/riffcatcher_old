<?php 
session_start();
require_once "layout/header.php";
require_once "inc/loggedin.inc.php";
?>

<body>
    <?php include "layout/navbar.php";
    var_dump($_SESSION);
    ?>
    <div class="container-fluid text-center mt-5 mb-5">
<H1>Riff Catcher</H1>
<h2><?php echo $_SESSION['firstname'] . " " . $_SESSION["lastname"]; ?></h2>


</div>
<?php include "layout/footer.php"; ?>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>