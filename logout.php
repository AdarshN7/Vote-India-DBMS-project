<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("loction:index.php");
} else {
    session_unset();
    session_destroy();
    //header("location:index.php?logout succesfully");
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Logout - VoterId</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="head_style">
        <div class="alert alert-success text-center" role="alert">
            <h1>Logged out Successfully</h1>
            <h5>Thank you for visiting to us.</h5>
            <a href="index.php"><button type="button" class="btn btn-danger">Close</button></a>
        </div>
    </div>

</body>

</html>