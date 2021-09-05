<div class="navbar navbar-default navbar-fixed-top”">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="float: left;">
                <img src="img/logo2.png" width="32" height="40" alt="logo"></div>
            <div style="float: left;">
                <a class="navbar-brand" href="index.php">Vote India</a>
            </div>
        </div>
        <div id="mynavbar">
            <ul class="nav navbar-nav navbar-right">

                <?php if (isset($_SESSION['email'])) { ?>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo ($_SESSION['name']) ?></a></li>
                    <li><a href="logout.php" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>

                <?php } else { ?>
                    <!--li><a href="admin_signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up1</a></--li>
                <li><a href="#" data-toggle="modal" data-target="#loginModalCenter"><span class="glyphicon glyphicon-log-in"></span>Login1</a></li>
                    <li><a href="user_signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up2</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginModalCenter2"><span class="glyphicon glyphicon-log-in"></span>Login2</a></li-->
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<!--logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>