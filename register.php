<?php
$con=  mysqli_connect("localhost:3308", "root","", "ecommerce") or die(mysqli_error($con));

 
$firstname=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'firstname'));
$lastname=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'lastname'));
$email=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
$dob=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'dob'));
$address=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'address'));
$password=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password'));
$contact=  mysqli_real_escape_string($con, filter_input(INPUT_POST, 'contact'));

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[6789][0-9]{9}$/";
 
$query = "SELECT * FROM users WHERE email='$email'";
 $result = mysqli_query($con, $query)or die($mysqli_error($con));
 $num = mysqli_num_rows($result);
 
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);       
  } 
  else 
      {
           $user_registration_query="insert into users(firstname, lastname, email, dob, address, password, contact) values ('$firstname', '$lastname', '$email', '$dob', '$address', '$password', '$contact')";
           $user_registration_submit=  mysqli_query($con, $user_registration_query) or die (mysqli_error($con));     
           include 'login.php';
      }     
      
      $_SESSION['email']=$email;
      $_SESSION['id']=  mysqli_insert_id($con);
?>
 