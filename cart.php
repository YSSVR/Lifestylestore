<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content" style="padding-top: 100px; min-height: 600px;">
             
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id1= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>"."<br>";
                                    
                                }
                                $id = rtrim($id1, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>" ;
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<a  href='products.php' class='btn btn-danger btn-lg active'>Add</a>" ."  items to the cart first!";
                            
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>