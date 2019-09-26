<?php
/*values thet are enterd by user in signup form is resevied by this page by post method and sored in variables*/
require 'includes/common.php';
$name= mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password= mysqli_real_escape_string($con, $_POST['password']);
$md5_password= md5($password);
$contact= mysqli_real_escape_string($con, $_POST['contact']);
$city= mysqli_real_escape_string($con, $_POST['city']);
$address=$_POST['address'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
  /*To keep password in the correct format we use preg_match function which is a PHP backend validation*/
}
if (!preg_match($regex_num, $contact)) {
  echo "Incorrect PHONE NUMBER";
  /*contact or phone number should always be a numarical digits
   * if user enter other than that then it will throw an error Incorrect phone number
   */
}
/*The password enterd by the user must have atleast 6 charecters*/
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}

/*To fetch the user data from the data base whare email in the database is same as email enterd by the user in signup form*/
 $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);/*number of rows is callculated*/
  if ($num != 0 ){
      echo "Email Already Exists";
  }
else{
    /* If everything is allright than the detail enter by the user is inserted into the database*/
$query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $md5_password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    /*session is started with session variables using email and user_id and user is redirected to the products.php page*/
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
}
?>