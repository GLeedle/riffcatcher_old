<?php
session_start();
$pageTitle = "User information for " . ucwords($_SESSION['username']);
include_once "layout/header.php";
require_once "inc/update.records.inc.php";
?>

<body>
    <?php
    include_once "layout/navbar.php";
    // var_dump($_SESSION)
    ?>
    <div class="container-fluid">

        <div class="container-fluid w-75 mt-5 bg-dark text-white shadow profile-page-wrapper">
            <div class="reg-wrapper bg-dark mx-auto w-50 p-2 border-left border-right border-secondary">
                <div class="update-form  mt-3">
                    <div class="profile-img mx-auto w-50">
                        <img src="<?= "usr/" . $_SESSION['profile_image'] ?>" alt="Profile image" height="150" width="150">
                        <p class="image-description"><a href="update-profile-image.php">Change Profile Image</a></p>
                        <p class="text-center"><?php echo $_SESSION['username']; ?>
                            <br>
                            <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
                            <br>
                            <?php echo $_SESSION['email']; ?> </p>
                    </div>
                </div>
                <hr class="bg-secondary">
                <form class="form-group text-left w-75 mx-auto" action="user-profile.php" method="POST">

                    <label for="firstname">Change First Name</label>
                    <input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo (isset($firstname_db) ? $firstname_db : ''); ?>">
                    <br>
                    <label for="lastname">Change Last Name</label>
                    <input class="form-control" type="text" id="lastname" name="lastname" value="<?php echo (isset($lastname_db) ? $lastname_db : ''); ?>">
                    <br>
                    <label for="email">Change Email Address</label>
                    <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email_db) ? $email_db : ''); ?>">
                    <br>
                    <label for="password">Change Password</label>
                    <input class="form-control" type="text" id="password" name="password">
                    <br>
                    <label for="address">Change Address</label>
                    <input class="form-control" type="text" id="address" name="address" value="<?php echo (isset($address_db) ? $address_db : ''); ?>">
                    <br>
                    <label for="city">Change City</label>
                    <input class="form-control" type="text" id="city" name="city" value="<?php echo (isset($city_db) ? $city_db : ''); ?>">
                    <br>
                    <label for="state">Change State</label>
                    <input class="form-control" type="text" id="state" name="state" value="<?php echo (isset($state_db) ? $state_db : ''); ?>">
                    <br>
                    <label for="zip">Change Zip Code</label>
                    <input class="form-control" type="text" id="zip" name="zip" value="<?php echo (isset($zip_db) ? $zip_db : ''); ?>">
                    <br>
                    <label for="phone">Change Phone Number</label>
                    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone_db) ? $phone_db : ''); ?>">
                    <br>

                    <!-- 
                 
                    
                    
                    
                    
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