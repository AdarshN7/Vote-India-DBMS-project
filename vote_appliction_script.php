<?php
require 'includes/common.php';
$firstname = mysqli_real_escape_string($con, $_POST['first_name']);
$lastname = mysqli_real_escape_string($con, $_POST['last_name']);
$fname = mysqli_real_escape_string($con, $_POST['father_name']);
$mname = mysqli_real_escape_string($con, $_POST['mother_name']);
$dob = mysqli_real_escape_string($con, $_POST['birthday']);
$gen = mysqli_real_escape_string($con, $_POST['gender']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$mobile = mysqli_real_escape_string($con, $_POST['phone']);
$nationality = mysqli_real_escape_string($con, $_POST['nationality']);
$aadhar = mysqli_real_escape_string($con, $_POST['adhar']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "users_data/photo/" . $filename;


$query1 = "SELECT id FROM applied WHERE email = '$email' AND mobile = '$mobile'";
$user_registration_query = "INSERT INTO applied ( imagename,firstname, lastname, fname, mname, dob, gen, email,mobile, nationality, aadhar, address) VALUES ('$filename','$firstname', '$lastname', '$fname', '$mname', '$dob', '$gen', '$email','$mobile','$nationality', '$aadhar', '$address')";

$result = mysqli_query($con, $query1);
if (mysqli_num_rows($result) > 0) {
    header('location: vote_appliction_script.php?email_error=enter allready registered');
} else {
    $result = mysqli_query($con, $user_registration_query);
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
    header("location:user_home.php?application submitted successfully");
}
