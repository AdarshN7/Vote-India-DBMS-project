<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['admin_email']);
$password = mysqli_real_escape_string($con, $_POST['admin_pass']);
$hashed_pwd = md5($password);
$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$hashed_pwd'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 0) {
    header("location:index.php");
} else {
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['type'] = $row['type'];
    if ($_SESSION['type'] == "admin") {
        header("location:admin_home.php");
    }
}
