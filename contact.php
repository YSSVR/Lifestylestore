<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.slim.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="index.css" type="text/css"/>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
      
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="container">
                    <div class="col-lg-10  col-md-6">
                        <h1>Live Support</h1>
                        <p>LIfestyle store is the smart, stylish,fashion home, maent expetially for you.
                            We bring hundreds of products from 37 trusted brands together in a single smart website,
                            so you can easily access, control,oredr and recive the products to your smart home, no matter where you are.
                         Every product you order with lifestyle shows up on the style,dignity of the day .So, From there,
                         if you want to check the status of a product, simply login to the website.
                         Perfect for those times when you’re not sure if the door is unlocked or hallway light is left on!</p>
                        <p>life style store support your from all over the world even though from remote areas
                        We thrive on creating the best experience for you.
                                    We look for opportunities where we can earn your trust and we walk the talk on commitments made to you.
                        So surely use this form to communicate with us we are waiting for yor call....</p>
                    </div>
                        <div class="col-lg-2  col-md-6">
                            <div class="img-responsive">
                                <img src="img/contact.png" alt="">
                            <br><br>
                            </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-lg-8  col-md-8">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>CONTACT US</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Enter details to submit</i><p>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="name" class="form-control"  placeholder="Name" name="name" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" pattern=".{6,}" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" rows="5" cols="30">Address</textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                                    <br />
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                        <div class="col-lg-4  col-md-4">
                            <div>
                                <h3>COMPANY INFORMATION:</h3>
                                <h4>Gurgaon,India-122018</h4><br>
                                <h4>Phone:+91 8448444853</h4><br>
                                <h4>email:training@internshal.com</h4>                                
                            <br><br>
                            </div>
                    </div>
                </div>
            </div>
        </div
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
                   
                        