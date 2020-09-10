<?php

$con=  mysqli_connect("localhost:3308", "root", "", "ecommerce") or die(mysql_error($con));

$email=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
$password=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password'));


$query="SELECT id, email, password FROM users WHERE email='$email' AND password='$password'";
$result= mysqli_query($con, $query) or die($mysqli_error($con)) ;
$num = mysqli_num_rows($result);

if ($num == 1)
    {
     session_start();
     $row = mysqli_fetch_array($result);
     $_SESSION['email'] = $row['email'];
     $_SESSION['id'] = $row['id'];
     header('location: index.php');
     } 
else
    {  
       echo 'Enter Corerct id password';
    }

?> 