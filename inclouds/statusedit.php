<?php
if (isset($_POST['vaziat'])) {
    require_once 'constant.php';

    $orderid = $_POST['orderid'];
    $status = $_POST['vaziat'];

    $update_status = "UPDATE orders_db SET status = '$status' WHERE id = '$orderid'";
    if (mysqli_query($conn, $update_status)) {
        header("Location: ../modir/order_details.php?id=$orderid");
        exit();
    }
}