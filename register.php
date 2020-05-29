<?php
require_once 'layout/header.php';
session_start();
?>

<body>
    <?php include "layout/navbar.php";
    require "inc/register.inc.php";
    ?>
    <div class="container-fluid bg-info w-50 mt-5 mb-5 text-center rounded shadow">
        <div class="reg-wrapper bg-secondary mx-auto w-50 p-2">
            <div class="registration-form  mt-3">
                <p><a href="login.php">Login</a> or register to proceed.</P>
                <p>Please choose a username and fill out the information below to register.</p>
            </div>
            <hr>

            <form class="form-group mt-5" action="register.php" method="POST">
                <label for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Username">
                <div id="errorUserName"></div>
                <br>
                <label for="firstname">First name</label>
                <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First Name">
                <div id="errorFirstName"></div>
                <br>
                <label for="lastname">Last name</label>
                <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Last Name">
                <div id="errorLastName"></div>
                <br>
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="email">
                <div id="errorEmail"></div>
                <br>
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                <div id="errorPassword"></div>
                <br>                
                <label for="address">Address</label>
                <input class="form-control" type="text" id="address" name="address" placeholder="Address">
                <div id="erroraddress"></div>
                <br>
                <label for="city">City</label>
                <input class="form-control" type="text" id="city" name="city" placeholder="City">
                <div id="errorcity"></div>
                <br>
                <label for="state">State</label>
                <input class="form-control" type="text" id="state" name="state" placeholder="State">
                <div id="errorstate"></div>
                <br>
                <label for="zip">Zip Code</label>
                <input class="form-control" type="number" id="zip" name="zip" placeholder="zip Code">
                <div id="errorzip"></div>
                <br>
                <label for="phone">Phone Number</label>
                <input class="form-control" type="number" id="phone" name="phone" placeholder="Phone Number">
                <div id="errorphone"></div>
                <br>
                <input class="btn btn-primary" type="submit" value="Register">
            </form>
            <p class="registration-form">Already a member? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <script src="js/form.js"></script>
    <?php include 'layout/footer.php'; ?>

</body>