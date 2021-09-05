<?php

require 'includes/common.php';
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$query1 = "SELECT id FROM applied WHERE email = '$email' AND mobile = '$mobile'";
$query2 = "SELECT id FROM approved WHERE email = '$email' AND mobile = '$mobile'";

$result1 = mysqli_query($con, $query1);
$result2 = mysqli_query($con, $query2);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Status - VoterId</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="head_style">
        <div class="alert alert-success text-center" role="alert">
            <h1>STATUS :
                <?php if (mysqli_num_rows($result1) > 0) {
                    echo (" Under Processing");
                } elseif (mysqli_num_rows($result2) > 0) {
                    echo (" Approved, you can downlaod.");
                } else echo (" Not Applied")
                ?>
            </h1>
            <h5>Thank you for visiting to us.</h5>
            <a href="index.php"><button type="button" class="btn btn-danger">Close</button></a>
        </div>
    </div>

</body>

</html>