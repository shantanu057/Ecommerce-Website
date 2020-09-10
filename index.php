<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Navigation</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <?php
        session_start();
        if(isset($_SESSION['id']))
        {
            require 'navigation_login.php';
        }
        else {
            require 'navigation.php';
        }
        ?>
        <div class="container" style="margin-top: 20px; margin-bottom: 100px;">
            <div class="coloumn">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Smart Phone</div>
                        <div class="panel-body">
                            <img class="img-responsive" src="images/oneplus8pro.jfif" alt="shan.jpg">
                        <center><b> One Plus 8 Pro <br></b>Price:60,000/-</center>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <a  href="login.php?id=1" ><button class="btn btn-primary form-control" type="button" value="submit" name="add_to_cart">Buy Now</button></a>
                         <?php
                                     } 
                        else {
                                    ?>
                                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            ?>
                                            
                        </div>   
                        </div>
                    </div>
            </div>     
	<div class=" col-md-4 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Smart Phone</div>
			         <div class="panel-body">
				<!--put mobile phone pics and its specifications in this box in all pannels. -->
                                <center><img  class="img-responsive"  src="images/iphone11.jfif.">
				<b> I Phone 11 Pro <br></b>Price:106,600/-</center>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <a  href="login.php?id=2" ><button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal"  name="add_to_cart">Buy Now!</button></a>
                               <?php
                                     } 
                        else {
                                    ?>
                                    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            ?>
			         </div>
		                 </div>
	                    </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Smart Phone</div>
			         <div class="panel-body">
				<!--put mobile phone pics and its specifications in this box in all pannels. -->
                                <center><img  class="img-responsive img_index"  src="images/asus1.jfif">
				<b> Samsung Galaxy Note 20 <br></b>Price:55,999/-</center>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <a  href="login.php?id=3" >	<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" name="add_to_cart">Buy Now!</button></a>
		      <?php
                                     } 
                        else {
                                    ?>
                                    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            ?>
                                 </div>
		                 </div>
	                    </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Speakers</div>
			         <div class="panel-body">
				<!--put mobile phone pics and its specifications in this box in all pannels. -->
                                <center><img  class="img-responsive"  src="images/sony.png">
				<b> One Plus 5T <br></b>Price:32,999/-</center>
                               <?php if (!isset($_SESSION['email'])) { ?>
                                <a  href="login.php?id=4" >	<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" name="add_to_cart">Buy Now!</button></a>
		<?php
                               }
                                else {
                                    ?>
                                    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            ?>
                                 </div>
		                 </div>
	                    </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Speakers</div>
			         <div class="panel-body">
				<!--put mobile phone pics and its specifications in this box in all pannels. -->
                                <center><img  class="img-responsive"  src="images/jbl.jfif">
				<b> Jbl Rugby <br></b>Price:4,999/-</center>
                                 <?php if (!isset($_SESSION['email'])) { ?>
                                <a  href="login.php?id=5" >	<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal"  name="add_to_cart">Buy Now!</button></a>
		<?php
                               }
                                else {
                                    ?>
                                    <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            ?>
                                 </div>
		                 </div>
	                    </div>
            <div class=" col-md-4 col-sm-6 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Speakers</div>
			         <div class="panel-body">
				<!--put mobile phone pics and its specifications in this box in all pannels. -->
                                <center><img  class="img-responsive"  src="images/portronics.jfif">
				<b> Portronics Breeze Plus <br></b>Price:5,999/-</center>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <a  href="login.php?id=6" >	<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal"  name="add_to_cart">Buy Now!</button></a>
		<?php
                               }
                                else {
                                    ?>
                                    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            ?>
                                
                                 </div>
		                 </div>
	                    </div>
                          </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
