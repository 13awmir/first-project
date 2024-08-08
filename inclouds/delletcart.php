<?php
require_once 'constant.php';
$cartid = $_GET['id'];

$dellet = "DELETE FROM cart_db WHERE id = '$cartid'";

if(mysqli_query($conn,$dellet)){
    header("Location: ../shop-cart.php?deleted=true");
    exit();
}