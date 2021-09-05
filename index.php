<?php
require "includes/common.php";
if (isset($_SESSION['email'])) {
    if ($_SESSION['type'] == "admin") {
        header('location: admin_home.php');
    } elseif ($_SESSION['type'] == "user") {
        header("location:user_home.php");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Home - VoterId</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Banneer image   -->
    <div id="banner_image">
        <?php
        include 'includes/header.php';
        ?>
        <center>
            <div class="wrap-login100">
                <span class="login100-form-title" style="color: #8b0000;">
                    <h1>Voter-id</h1>
                    <hr>
                    <h3>DataBase Management System</h3>
                </span>
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="assets/images/img-01.png" alt="IMG">
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        Member Login
                    </span>
                    <div class="container-login10-form-btn">
                        <div class="wrap-login10-form-btn">
                            <div class="login10-form-bgbtn"></div>
                            <a href="#" class="login10-form-btn" type="button" data-toggle="modal" data-target="#loginModalCenter" aria-expanded="false" aria-controls="collapse-admin">
                                Admin
                            </a>
                        </div>
                        <div class="wrap-login10-form-btn">
                            <div class="login10-form-bgbtn"></div>
                            <a class="login10-form-btn" type="button" data-toggle="modal" data-target="#loginModalCenter2" aria-expanded="false" aria-controls="collapse-user">
                                User
                            </a>
                        </div>
                    </div>
                </div>
                <!-- admin Modal -->
                <div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="loginModalLongTitle">Admin Login</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="admin_login_submit.php">
                                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="admin_email" placeholder="Admin's Email">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <input class="input100" type="password" name="admin_pass" placeholder="Admin's Password">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>

                                    <!--div class="text-center p-t-12">
                                        <span class="txt1">
                                            Forgot
                                        </span>
                                        <a class="txt2" href="admin_signup.php">
                                            Username / Password?
                                        </a>
                                    </div>

                                    <div class="text-center p-t-136">
                                        <a class="txt2" href="admin_signup.php">
                                            Create your Account
                                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                        </a>
                                    </div-->
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- user modal-->
                <div class="modal fade" id="loginModalCenter2" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="loginModalLongTitle">User Login</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="user_login_submit.php">
                                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="user_email" placeholder="user's Email">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <input class="input100" type="password" name="user_pass" placeholder="user's Password">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>

                                    <div class="text-center p-t-12">
                                        <span class="txt1">
                                            Forgot
                                        </span>
                                        <a class="txt2" href="user_signup.php">
                                            Username / Password?
                                        </a>
                                    </div>

                                    <div class="text-center p-t-136">
                                        <a class="txt2" href="user_signup.php">
                                            Create your Account
                                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <!--  footer  -->
        <?php
        include 'includes/footer.php';
        ?>
    </div>

    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="assets/js/main.js"></script>
</body>

</html>