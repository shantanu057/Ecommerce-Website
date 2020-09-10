<?php
$con = mysqli_connect("localhost:3308", "root", "", "ecommerce")or die($mysqli_error($con));
session_start();
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    
    <body>
       
        <div class="bg-img-login">
        
        <form action="login_script.php" method="post" >
            <div class="container_login">
          <div class="row">
              <h2 style="text-align:center;color: white">Login With Social Media Or Manually </h2>
          </div>
          <div class="col">
              <div class="vl"></div>
              <div class="row">
        <a href="#" class="fb_btn" style="text-align: center">
            <i  ></i> Login with Facebook
        </a>
                  <input class="user" type="email" name="email" placeholder="Email" required="true">
        </div>
              <div class="row">
        <a href="#" class="twitter_btn"style="text-align: center">
          <i ></i> Login with Twitter
          </a>
                  <input class="password" type="password" name="password" placeholder="Password" required="true">
               </div>
              <div class="row">
          <a href="#" class="google_btn"style="text-align: center">
          <i ></i> Login with Google+
          </a>
           
                  <a href="login_script.php">  <input class="submit" type="submit" value="Login"></a>
                   
              </div>
      </div>
    </div>
      </form>
  <div class="row">
      <a href="signup.php" class="signup" style="color:white;text-align: center" class="btn">Sign up</a>
      <a href="#" class="forget" style="color:white;text-align: center" class="btn">Forgot password?</a>
    </div>
  
            </div>

</html>