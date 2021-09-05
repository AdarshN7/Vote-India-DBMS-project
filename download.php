<?php

require 'includes/common.php';
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$query1 = "SELECT id FROM applied WHERE email = '$email' AND mobile = '$mobile'";
$query2 = "SELECT * FROM approved WHERE email = '$email' AND mobile = '$mobile'";

$result1 = mysqli_query($con, $query1);
$result2 = mysqli_query($con, $query2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Download - voterId</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .card {
            margin: 5% 5%;
            width: 424px;
            height: 674px;
            position: relative;
        }

        .card2 {
            position: absolute;
            top: 0px;
            left: 0px;

        }
    </style>
</head>

<body>
    <?php if (mysqli_num_rows($result1) > 0) { ?>
        <div class="head_style">
            <div class="alert alert-success text-center" role="alert">
                <h1>STATUS :
                    <?php echo (" Under Processing"); ?>
                </h1>
                <h5>Thank you for visiting to us.</h5>
                <a href="index.php"><button type="button" class="btn btn-danger">Close</button></a>
            </div>
        </div>
    <?php } elseif (mysqli_num_rows($result2) > 0) {
        $row = mysqli_fetch_array($result2);
        $var = 202070000;
    ?>
        <a onclick="window.print()">Print</a>
        <div class="card">
            <img src="img/idcard2.jpg" alt="background" style="border-radius: 10px; border: 2px solid darkred;" />
            <div class="card2">
                <table width="318" height="352">
                    <tbody>
                        <tr>
                            <td width="104" height="111">&nbsp;</td>
                            <td width="204">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="232">&nbsp;</td>
                            <td><img src="users_data/photo/<?php echo $row["imagename"]; ?>" alt="img" width="190" height="207" style="border-radius: 10px; border: 2px solid #0b2e13;"></td>
                        </tr>
                    </tbody>
                </table>
                <table width="422" height="192" border="0">
                    <tbody>
                        <tr>
                            <td width="10">&nbsp;</td>
                            <td width="103" height="27"> Id No. :</td>
                            <td colspan="2">&nbsp;<b>JOPX<?php echo ($var + $row['id']); ?></b></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td height="34">Name : </td>
                            <td colspan="2">&nbsp;<b><?php echo ($row['firstname']);
                                                        echo (" ");
                                                        echo ($row['lastname']); ?></b></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Father's Name :</td>
                            <td colspan="2">&nbsp;<b><?php echo ($row['fname']); ?></b></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2">Gen : <b><?php echo ($row['gen']); ?></b></td>
                            <td width="226">DOB : <b><?php echo ($row['dob']); ?></b></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td height="28">Assembly : </td>
                            <td colspan="2"> <b><?php echo ($row['address']); ?></b></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Address : </td>
                            <td colspan="2">&nbsp;<b><?php echo ($row['address']); ?></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <?php } else { ?>
        <div class="head_style">
            <div class="alert alert-success text-center" role="alert">
                <h1>STATUS :
                    <?php echo (" Not Applied"); ?>
                </h1>
                <h5>Thank you for visiting to us.</h5>
                <a href="index.php"><button type="button" class="btn btn-danger">Close</button></a>
            </div>
        </div>
    <?php } ?>
</body>

</html>