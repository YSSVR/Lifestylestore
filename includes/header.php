<!--Header is present in each and every webpage at the top
we link this header.php file to all other webpages using 'include' command
 * Session variable will be declared after login or signup.
 * i.e. we can use session to control which links will be shown to which user.
 *  We will create email and user_id session variables for logged in users.
 * The difference of links is in navbar-right.
 -->
?>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!--This is the collapsive nav bar code
            i.e., the web page is responsive(adjust acordin to the device configaration)
            -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
              /*If isset($_SESSION['email'] is true, then the user is logged in.
               *  So 'cart', 'settings','order history' and 'logout' links will be shown.
               */ 
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="orderhistory.php"><span class="glyphicon glyphicon-file"></span> Order History</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <!--If session is not set,
                    then 'signup', 'login','about us' and 'contact' links will be shown.
                    -->
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
<!--As navbar is included in all the web pages,
 we will add this code in all web pages using include statement-->