<?php
require 'includes/common.php';
?>
<!doctype html>
<html>

<head>
    <title>Admin Login-VoterId</title>
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
    <!--   Navigation Bar-->
    <?php
    include 'includes/header.php';
    ?>
    <!-- Login Form   -->
    <div class="container-fluid">
        <div class="row row_style">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Login</h2>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form method="post" action="admin_login_submit.php">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                        </form>
                        <div class="panel-footer">
                            <p>Don't have an account?<a href="admin_signup.php">Resister</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  footer  -->
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>