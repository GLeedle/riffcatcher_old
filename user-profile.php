<?php
session_start();
$pageTitle = "User information for " . ucwords($_SESSION['username']);
include_once "layout/header.php";
require_once "inc/update-profile-image.inc.php";
?>

<body>
    <?php
    include_once "layout/navbar.php";
    var_dump($_SESSION)
    ?>
    <div class="container-fluid">

        <div class="container-fluid m-0 mt-5 bg-light text-white">
            <div class="reg-wrapper bg-secondary mx-auto w-50 p-2 border-left border-right rounded">
                <div class="registration-form  mt-3">


                    <div class="profile-img mx-auto w-25">
                        <img src="<?= "usr/" . $_SESSION['profile_image'] ?>" alt="Profile image" height="150" width="150">
                        <br><br>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                            <input type="file" name="file_upload">
                            <input type="submit" name="submit" value="Upload">
                        </form>



                    </div>
                    <p></p>
                </div>
                <hr>

                <form class="form-group text-left w-50 mx-auto" action="register.php" method="POST">
                    <label for="username">Change Username</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Username">



                    <!-- <br>
                    <label for="firstname">First name</label>
                    <p class="error">*</p><span data-field data-firstname> &nbsp;&nbsp;( Please enter your first name )</span>
                    <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo (isset($firstname) ? $firstname : ""); ?>">
                    <br>
                    <label for="lastname">Last name</label>
                    <p class="error">*</p><span data-field data-lastname> &nbsp;&nbsp;( Please enter your last name )</span>
                    <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo (isset($lastname) ? $lastname : ""); ?>">
                    <br>
                    <label for="email">Email</label>
                    <p class="error">*</p><span data-field data-email> &nbsp;&nbsp;( Please enter your email address )</span>
                    <input class="form-control" type="email" id="email" name="email" placeholder="email" value="<?php echo (isset($email) ? $email : ""); ?>">
                    <br>
                    <label for="password">Password</label>
                    <p class="error">*</p><span data-field data-password> &nbsp;&nbsp;( Please enter a password )</span>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                    <br>
                    <label for="address">Address</label><span data-field data-address> &nbsp;&nbsp;( Please enter your address )</span>
                    <input class="form-control" type="text" id="address" name="address" placeholder="Address" value="<?php echo (isset($address) ? $address : ""); ?>">
                    <br>
                    <label for="city">City</label><span data-field data-city> &nbsp;&nbsp;( Please enter your city )</span>
                    <input class="form-control" type="text" id="city" name="city" placeholder="City" value="<?php echo (isset($city) ? $city : ""); ?>">
                    <br>
                    <label for="state">State</label><span data-field data-state> &nbsp;&nbsp;( Please enter your state )</span>
                    <input class="form-control" type="text" id="state" name="state" placeholder="State" value="<?php echo (isset($state) ? $state : ""); ?>">
                    <br>
                    <label for="zip">Zip Code</label><span data-field data-zip> &nbsp;&nbsp;( Please enter your zip code )</span>
                    <input class="form-control" type="number" id="zip" name="zip" placeholder="zip Code" value="<?php echo (isset($zip) ? $zip : ""); ?>">
                    <br>
                    <label for="phone">Phone Number</label><span data-field data-phone> &nbsp;&nbsp;( Please enter your phone number )</span>
                    <input class="form-control" type="number" id="phone" name="phone" placeholder="Phone Number" value="<?php echo (isset($phone) ? $phone : ""); ?>"> -->
                    <br>
                    <input class="btn btn-primary" type="submit" value="Save Changes" id="submit">
                </form>

            </div>
        </div>


    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>