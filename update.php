<?php
require 'includes/common.php';
$id= $_GET['id'];
$firstname = mysqli_real_escape_string($con, $_POST['first_name']);
$lastname = mysqli_real_escape_string($con, $_POST['last_name']);
$fname = mysqli_real_escape_string($con, $_POST['father_name']);
$mname = mysqli_real_escape_string($con, $_POST['mother_name']);
$dob = mysqli_real_escape_string($con, $_POST['birthday']);
$mobile = mysqli_real_escape_string($con, $_POST['phone']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$query1 = "UPDATE approved SET firstname='$firstname', lastname='$lastname', fname='$fname', mname='$mname',dob='$dob' , mobile = '$mobile',address='$address' WHERE id='$id'";
$result = mysqli_query($con, $query1) or die(mysqli_error($con));
//header("location:admin_home.php");
?>
<!doctype html>
<html>

<head>
    <title>Approved - VoterId</title>
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
        <div class="wrap-login100 " style="padding: 50px 50px; width: 97%;">
            <?php
            $sql = "SELECT * FROM approved WHERE id = '$id'";
            $result = mysqli_query($con, $sql) or die(mysqli_error($con));

            if (mysqli_num_rows($result) == 0) { ?><br /><br /><br />
                <h4 class="login100-form-title" style="color: #8b0000;">NO Match found.
                    <hr>
                    <a href="index.php"><button type="button" class="btn btn-danger">Close</button></a></h4>
            <?php } else {
                ?>

                <!-- Order summery   -->
                <span class="login100-form-title" style="color: #8b0000; padding: 0px 0px;">
                         <h2>Updated Record </h2>
                        <hr>
                        <h3>Id No. : <?php echo ($id); ?></h3>
                    </span>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th>Id No. </th>
                            <th>Photo </th>
                            <th>fisrt name</th>
                            <th>last name</th>
                            <th>father's name </th>
                            <th>Mother's name </th>
                            <th>Birthday </th>
                            <th>Gender </th>
                            <th>Email </th>
                            <th>Phone Number </th>
                            <th>Nationality </th>
                            <th>Aadhar Number </th>
                            <th>Full Address </th>
                            <th>Status </th>
                        </tr>
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><img src="users_data/photo/<?php echo $row["imagename"]; ?>" width="60px" height="70px" alt="photo"></td>
                                <td><?php echo $row["firstname"]; ?></td>
                                <td><?php echo $row["lastname"]; ?></td>
                                <td><?php echo $row["fname"]; ?></td>
                                <td><?php echo $row["mname"]; ?></td>
                                <td><?php echo $row["dob"]; ?></td>
                                <td><?php echo $row["gen"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["mobile"]; ?></td>
                                <td><?php echo $row["nationality"]; ?></td>
                                <td><?php echo $row["aadhar"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td class=" text-success"><b>Updated</b></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <div class="text-success">
                        <center><b>Your record Succesfully Update!!!!!</b></center>
                    </div><br>
                    <a href="index.php"><button type="button" class="btn btn-danger">Close</button></a></h4>
                    <br><br>
                </div>
            <?php } ?>
        </div>
    </center>

    <!--  footer  -->
    <?php
    include 'includes/footer.php';
    ?>
</div>
</body>

</html>