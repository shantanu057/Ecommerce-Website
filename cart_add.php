<?php
$con = mysqli_connect("localhost:3308", "root", "", "ecommerce") or die($mysqli_error($con));
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $query = "INSERT INTO users_items(user_id, item_id) VALUES('$user_id', '$item_id')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: index.php');
}
?>   