<?php
require 'includes/common.php';
?>
<!doctype html>
<html>

<head>
    <title>Application form - VoterId</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="assets/assets2/css/signup.css" rel="stylesheet" media="all">

</head>

<!--  Navigation Bar -->
<div id="banner_image">
    <?php
    include 'includes/header.php';
    ?>
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Registration Form</h2>
                <form method="post" action="vote_appliction_script.php" enctype="multipart/form-data">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">first name</label>
                                <input class="input--style-4" type="text" name="first_name" >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">last name</label>
                                <label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">father's name</label>
                                <input class="input--style-4" type="text" name="father_name">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Mother's name</label>
                                <input class="input--style-4" type="text" name="mother_name">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Birthday</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Gender</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" checked="checked" name="gender" value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" name="gender" value="female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Email</label>
                                <input class="input--style-4" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Phone Number</label>
                                <input class="input--style-4" type="text" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Nationality</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="nationality">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Indian</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Aadhar Number</label>
                                <input class="input--style-4" type="text" name="adhar">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Full Address</label>
                                <input class="input--style-4" type="text" name="address">
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group">
                                <label class="labl">Photo</label>
                                <input class="input--style-4" type="file" name="uploadfile">
                            </div>
                        </div>
                    </div>

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  footer  -->
    <?php
    include 'includes/footer.php';
    ?>
</div>
<!-- Jquery JS-->
<script src="assets/assets2/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="assets/assets2/vendor/select2/select2.min.js"></script>
<script src="assets/assets2/vendor/datepicker/moment.min.js"></script>
<script src="assets/assets2/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="assets/assets2/js/global.js"></script>
</body>

</html>