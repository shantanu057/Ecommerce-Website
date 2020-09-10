<?php
$con = mysqli_connect("localhost:3308", "root", "", "ecommerce") or die($mysqli_error($con));
session_start();

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = filter_input(INPUT_POST,'item_id');

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET user_id= '$user_id'  AND item_id = '  $item_ids_string ' ";
$result=mysqli_query($con, $query) ;//or die($mysqli_error($con));
         if (!$result) {
                            die(mysqli_error($con));
                               };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <?php include ('navigation_login.php'); ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div style="margin-top: 150px" class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                      <p align="center">Click <a href="index.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include("footer.php");
        ?>
    </body>
</html>