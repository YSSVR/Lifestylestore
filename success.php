<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query)or die(mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Success | Life Style Store</title>
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
  
        <div class="container-fluid" id="content" style="padding-top: 50px;">
            <div class="col-md-12">
                <div class="jumbotron  home-spacer">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        
    </body>
</html>