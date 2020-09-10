<?php
$con=  mysqli_connect("localhost:3308", "root", "", "ecommerce") or die(mysqli_error($con));


include 'navigation_login.php';

$firstname=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'firstname'));
$lastname= mysqli_real_escape_string($con, filter_input(INPUT_POST, 'lastname'));
$email=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
$message=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'message'));

$user_query="INSERT into query(firstname, lastname, email, message) values ('$firstname', '$lastname', '$email', '$message') ";
$user_query_submit=  mysqli_query($con, $user_query) or die(mysqli_errno($con));

 header('location: contactus.php? error=Successfully Recorded Your Query');
 
 include 'footer.php';
 ?>