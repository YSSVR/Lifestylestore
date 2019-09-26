<?php
require("includes/common.php");

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
        <div style="min-height: 600px;">
        <?php
       echo "No order has
been placed! Start Shopping!.";
        ?>
        </div>
        
        
    <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
</body>
</html>
