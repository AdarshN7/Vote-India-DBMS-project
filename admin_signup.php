<?php
require 'includes/common.php';
if (isset($_SESSION['id'])) {
    header("location:admin_home.php");
}
?>
<!doctype html>
<html>

<head>
    <title>Admin Signup - VoterId</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/assets3/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/assets3/css/style.css">
</head>

<body>
    <!--   Navigation Bar -->
    <div id="banner_image">
        <?php
        include 'includes/header.php';
        ?>
        <div class="main">


            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <form method="post" id="signup-form" class="signup-form" action="admin_signup_script.php">
                            <h2 class="form-title">Create account</h2>
                            <div class="form-group">
                                <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="mobile" id="mobile" placeholder="Mobile Number" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="password" id="password" placeholder="Password" />
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                            </div>
                        </form>
                        <p class="loginhere">
                            Have already an account ? <a href="index.php" class="loginhere-link">Login here</a>
                        </p>
                    </div>
                </div>
            </section>

        </div>
        <!--  footer  -->
        <?php
        include 'includes/footer.php';
        ?>
    </div>

    <script src="assets/assets3/vendor/jquery/jquery.min.js"></script>
    <script src="assets/assets3/js/main.js"></script>
</body>

</html>