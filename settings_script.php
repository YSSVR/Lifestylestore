<?php

// This page updates the user password
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = mysqli_real_escape_string($con, $_POST['old-password']);
$old_pass_md5 = MD5($old_pass);

$new_pass = mysqli_real_escape_string($con, $_POST['password']);
$new_pass_md5 = MD5($new_pass);

$new_pass1 = mysqli_real_escape_string($con, $_POST['password1']);
$new_pass1_md5 = MD5($new_pass1);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass_md5 != $new_pass1_md5) {
    echo "The two passwords are not matched";
} else {
    if ($old_pass_md5 == $orig_pass) {
        $query = "UPDATE  users SET password = '" . md5($new_pass) . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        echo "Password Updated";
    } else
        echo "Wrong Old Password";
}
?>