<?php

if (!empty($_POST['billing_address']) && !empty($_POST['payment_option'])) {
    require_once 'constant.php';
    session_start();

    $userid = $_SESSION['userid'];
    $address = $_POST['billing_address'];
    $payment_option = $_POST['payment_option'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];

    $orderdetails = array(
        'address' => "$address",
        'city' => "$city",
        'state' => "$state",
        'zipcode' => "$zipcode",
        'phone' => "$phone"
    );
    $details = json_encode($orderdetails);
    $escaper = array("\\","/","\"","\n","\r","\t","\x08","\x0c");
    $replace = array("\\\\","\\/","\\\"","\\n","\\r","\\t","\\f","\\b");
    $res_details = str_replace($escaper, $replace, $details);

    $select_cart = "SELECT * FROM cart_db WHERE user_id= $userid";
    $result_cart = mysqli_query($conn, $select_cart);

    $order_items = array();
    $fullprice = 0;
    foreach ($result_cart as $item) {
        $prid = $item['pr_id'];
        $select_pr = "SELECT * FROM products_db WHERE id='$prid'";
        $result_pr = mysqli_query($conn, $select_pr);
        $row_pr = mysqli_fetch_assoc($result_pr);

        $order_item = array();
        $itemprice = 0;
        $order_item['pr_id'] = $item['pr_id'];
        $order_item['tedad'] = $item['tedad'];
        $order_item['color'] = $item['color'];
        $order_item['size'] = $item['size'];
        if ($row_pr['takhfif'] != ''){
            $order_item['price'] = $row_pr['takhfif'];
            $itmprice = $row_pr['takhfif'] * $item['tedad'];
        }else{
            $order_item['price'] = $row_pr['price'];
            $itmprice = $row_pr['price'] * $item['tedad'];
        }
        $fullprice += $itmprice;
        array_push($order_items, $order_item);
    }


    $orders = json_encode($order_items);
    $escaper_items = array("\\","/","\"","\n","\r","\t","\x08","\x0c");
    $replace_items = array("\\\\","\\/","\\\"","\\n","\\r","\\t","\\f","\\b");
    $res_items = str_replace($escaper_items, $replace_items, $orders);

    $rand = rand(1111111111,9999999999);
    $select_rand = "SELECT peygiri FROM orders_db";
    $result_rand = mysqli_query($conn, $select_rand);
    $rand_count = mysqli_num_rows($result_rand);
    if ($rand_count > 0){
        $rand = rand(1111111111,9999999999);
    }

    $insert_order = "INSERT INTO orders_db (user_id,order_items,order_details,price,payment_method,peygiri) VALUES ($userid,'$res_items','$res_details','$fullprice','$payment_option',$rand)";



    if (mysqli_query($conn, $insert_order)) {

        $delete_cart = "DELETE FROM cart_db WHERE user_id= $userid";
        mysqli_query($conn, $delete_cart);

        header("Location: ../order-completed.php?factor=$rand");
        exit();
    }
}