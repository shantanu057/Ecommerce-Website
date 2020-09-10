<?php
$con=  mysqli_connect("localhost:3308", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$email= $_SESSION['email'];
$old_password=  mysqli_real_escape_string ($con,filter_input(INPUT_POST,'old_password'));
$new_password=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'new_password'));
$new_password1=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'new_password1'));

$query="SELECT email, password FROM users WHERE email='$email' AND password='$old_password'";
$result=  mysqli_query($con, $query) or die(mysqli_error($con));
$row=  mysqli_fetch_array($result);
$orig_pass=$row['password'];

 include ('navigation_login.php');

if ($new_password != $new_password1)
{
    header('location: settings.php? error=Password did not match');
}
 else 
     {
        if($orig_pass==$old_password)
        {
            $query="UPDATE  users SET password='$new_password' WHERE email='$email'";
            mysqli_query($con, $query) or die(mysqli_error($con));
             header('location: settings.php?error=Password Updated');
        }
 else {
     header('location: settings.php?error=Wrong Old Password');
 }
     }
include ('footer.php');
?>