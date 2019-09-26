<!--
This is the signup page of this website,Lifestyle store to register new user into the database
sign up page can be visited by logged out users only to register as a member/user
-->
<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle store</title>
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
    <body>
        <div class="container" style="padding-top: 30px;">
        <!-- <!-- Header is the link from header file in includes
        as mensioned
        /*If isset($_SESSION['email'] is true, then the user is logged in.
        So 'cart', 'settings','order history' and 'logout' links will be shown.
        */
        /*If session is not set,
        then 'signup', 'login','about us' and 'contact' links will be shown.
        */
         --> -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        <!--form is to read the details of new user that was enterd-->
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container" style="padding-top: 100px; min-height: 600px;">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <!--detail/credentials that the user enter is sent to data base via signup_script.php
                        What user/sometimes hackers cannot see is the backend or the
                        functionality of the form, which comprises of form validation and form injection.
                         -->
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group"><!--name of the user-->
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group"><!--email of the user-->
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
                            </div>
                            <div class="form-group"><!--password set by the user-->
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group"><!--contact number of the user-->
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group"><!--city of the user-->
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group"><!--address of the user-->
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                            <br/>
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