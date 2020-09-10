<?php
//$con=  mysqli_connect("localhost", "root","", "ecommerce ") or die(mysqli_error($con));
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
        <div class="bg-img-sign">
        <form action="register.php" method="post" >
            <div class="container_signup">
                <div class="row" style="text-align: center">
                <label for="fname"><h3>First Name</h3></label><br>
                <input class="input_signup" type="text" name="firstname" placeholder="Enter Your First Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
  <br> 
  <label for="lname"><h3>Last Name</h3></label><br>
  <input class="input_signup" type="text" name="lastname"  placeholder="Enter Your Last Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
  <br>
  <label for="email"><h3>Email ID</h3></label><br>
  <input class="input_signup" type="email" name="email"  placeholder="Enter Your Email ID" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> 
  <br>
  <label for="dob"><h3>D.O.B</h3></label><br>
  <input class="input_signup" type="date"name="dob"  placeholder="Enter Your D.O.B" required="true" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"> 
  <br>  
  <label for="address"><h3>Address</h3></label><br>
  <input class="input_signup" type="text" name="address"  placeholder="Enter Your Address" required="true"> 
  <br>
  <label for="password"><h3>Password</h3></label><br>
  <input class="input_signup" type="password" name="password" placeholder="Enter Your Password" required="true"> 
  <br>
  <label for="contact"><h3>Contact Number</h3></label><br>
  <input class="input_signup" type="number" name="contact"  placeholder="Enter Your Contact Number" required="true"pattern="[6789][0-9]{9}" maxlength="10"> 
  <br>  
  <a href="login.php"><input  class="submit submit_btn" type="submit" value="Submit"></a>
            </div>
             </div>   
        </form>
        <br>
        <br>
    
      
        <div>  <?php include 'footer.php';?></div>
       
        </div>
    </body>
</html>