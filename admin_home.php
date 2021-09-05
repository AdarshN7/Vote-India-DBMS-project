<?php
require 'includes/common.php';
?>
<!doctype html>
<html>

<head>
    <title>Admin Home - VoterId</title>
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
    <!--   Navigation Bar -->
    <div id="banner_image">
        <?php
        include 'includes/header.php';
        ?>
        <center>
            <div class="wrap-login100">
                <span class="login100-form-title" style="color: #8b0000;">
                    <h1>Welcome <?php echo ($_SESSION['name']) ?></h1>
                    <hr style="margin: 10px;">
                    <h3>Authentication Type : <?php echo ($_SESSION['type']) ?></h3>
                </span>
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="assets/images/img-01.png" alt="IMG">
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        Admin's Menu
                    </span>
                    <div class="container-login10-form-btn">
                        <div class="wrap-login10-form-btn">
                            <div class="login10-form-bgbtn"></div>
                            <a href="applications.php" class="login10-form-btn" type="button" target="_self">
                                Applications
                            </a>
                        </div>
                        <div class="wrap-login10-form-btn">
                            <div class="login10-form-bgbtn"></div>
                            <a href="approved_list.php" class="login10-form-btn" type="button" target="_self">
                                Approved
                            </a>
                        </div>
                        <div class="wrap-login10-form-btn">
                            <div class="login10-form-bgbtn"></div>
                            <a href="#" class="login10-form-btn" type="button" data-toggle="modal" data-target="#loginModalCenter1" aria-expanded="false" aria-controls="collapse-admin">
                                Downlaod
                            </a>
                        </div>
                        <div class="wrap-login10-form-btn">
                            <div class="login10-form-bgbtn"></div>
                            <a href="#" class="login10-form-btn" type="button" data-toggle="modal" data-target="#loginModalCenter2" aria-expanded="false" aria-controls="collapse-admin">
                            Correction
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </center>


        <!--  footer  -->
        <?php
        include 'includes/footer.php';
        ?>


        <!-- download modal-->
        <div class="modal fade" id="loginModalCenter1" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="loginModalLongTitle">Download</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="download.php">
                            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email" placeholder="user's Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="mobile" placeholder="user's Mobile No.">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    Submit
                                </button>
                            </div>
                            <h4 class=""></h4>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <!-- download modal-->
        <div class="modal fade" id="loginModalCenter2" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="loginModalLongTitle">Correction</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="correction.php">
                            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email" placeholder="user's Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="mobile" placeholder="user's Mobile No.">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    Submit
                                </button>
                            </div>
                            <h4 class=""></h4>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>