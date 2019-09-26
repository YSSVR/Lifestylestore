<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
This is login page code which contain to form-groups
1.Email
2.Password
This page is used to allow only registered users to the products page i.e whose information is stored in data base
wether the users is registerd or not can be verified by the login_submit.php where it check the details that was enterd 
by the user, is present in the database or not
*login.php send the data enterd by the user to the login_submit.php using POST method
-->
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Life Style Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- Bootstrap Core CSS,
        like external stylesheet bootstap add predefined css classes to make web development easy
        -->
        
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.slim.js"></script>
        <!-- jQuery,
        is the library of  java scripts where pre defined functions are present,this is must if we use .js file
        -->
        
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Bootstrap Core JavaScript,
        makes page dynamic or used to add animations and effects to the web page,
        this depend on jquery.
        This js file is used here to add the pre-defined functions to the page as css did
        -->
        
        <link rel="stylesheet" href="style.css" type="text/css"/><!-- Custom external style CSS -->
    </head>
    <body style="padding-top: 30px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        
        <div id="content" style="padding-top: 100px; min-height: 600px;">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <br />
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--Footer start-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
</body>
</html>
