<?php
require 'includes/common.php';
$user_id = $_GET["id"];
$query1 = "SELECT * FROM applied WHERE id = '$user_id'";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
$row = mysqli_fetch_array($result1);

$imagename = mysqli_real_escape_string($con, $row["imagename"]);
$firstname = mysqli_real_escape_string($con, $row["firstname"]);
$lastname = mysqli_real_escape_string($con, $row["lastname"]);
$fname = mysqli_real_escape_string($con, $row["fname"]);
$mname = mysqli_real_escape_string($con, $row["mname"]);
$dob = mysqli_real_escape_string($con, $row["dob"]);
$gen = mysqli_real_escape_string($con, $row["gen"]);
$email= mysqli_real_escape_string($con, $row["email"]);
$mobile= mysqli_real_escape_string($con, $row["mobile"]);
$nationality=mysqli_real_escape_string($con, $row["nationality"]);
$aadhar=mysqli_real_escape_string($con, $row["aadhar"] );
$address=mysqli_real_escape_string($con, $row["address"]);

$query2 = "INSERT INTO approved ( imagename,firstname, lastname, fname, mname, dob, gen, email,mobile, nationality, aadhar, address) VALUES ('$imagename','$firstname', '$lastname', '$fname', '$mname', '$dob', '$gen', '$email','$mobile','$nationality', '$aadhar', '$address')";
$result2 = mysqli_query($con , $query2) or die(mysqli_error($con));

$query3 = "DELETE FROM applied WHERE id = '$user_id' ";
$result3 = mysqli_query($con , $query3) or die(mysqli_error($con));
header("location:applications.php");
