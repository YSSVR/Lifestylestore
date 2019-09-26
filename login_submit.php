<!DOCTYPE html>
<!--
As this Get the information of user's email and password,
which was enterd by the user in login form using POST method
*
This verifyes the detail enter by the user with that of detail's of the same user in the data base
*if details matches than it start the session using $_SESSION['email']and $_SESSION['user_id']
and allow user into the products page
-->
<?php

require("includes/common.php");
   
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password_MD5 = MD5($password);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
//The password enterd by the user must have atleast 6 charecters
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
//To keep password in the correct format we use preg_match function which is a PHP backend validation
}
// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password_MD5 . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  echo "Please enter correct E-mail id and Password";
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}
?>

