<!--
This is the home page of this website,Lifestyle store
Index/Home page can be visited by logged out users only
-->
<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<html>
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
    <body style="padding-top: 30px;">
        <!-- Header is the link from header file in includes
        as mensioned
        /*If isset($_SESSION['email'] is true, then the user is logged in.
        So 'cart', 'settings','order history' and 'logout' links will be shown.
        */
        /*If session is not set,
        then 'signup', 'login','about us' and 'contact' links will be shown.
        */
         -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <!--content inside main banner image start's-->
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                            <!-- redirects to products.php by clicking the link-->
                        </div>
                    </center>
                </div>
                <!--content inside main banner image end's-->
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container" style="padding-top: 20px;">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <!-- redirects to products.php by clicking the link-->
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <!-- redirects to products.php by clicking the link-->
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <!-- redirects to products.php by clicking the link-->
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer start-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>
