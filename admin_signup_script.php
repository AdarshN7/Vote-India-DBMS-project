<?php

require 'includes/common.php';
$name = mysqli_real_escape_string($con, $_POST['name']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$hashed_pwd = md5($password);

$query1 = "SELECT id FROM admin WHERE email = '$email' AND password = '$hashed_pwd'";
$user_registration_query = "INSERT INTO admin ( name, email, password, mobile) VALUE ('$name','$email', '$hashed_pwd' , '$mobile')";
$result = mysqli_query($con, $query1);
if (mysqli_num_rows($result) > 0) {
    header('location: admin_signup.php?email_error=enter allready registered');
} else {
    $result = mysqli_query($con, $user_registration_query);
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['id'] = mysqli_insert_id($con); {
        header("location:admin_home.php");
    }
}
