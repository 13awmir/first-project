<?php

    session_start();
    if (!isset($_SESSION['login']) && !isset($_SESSION['userid'])) {
        header("Location: ../login.php");
        exit();
    }
    require_once 'constant.php';
    if(!empty($_POST['quantity'])){

        $tedad = $_POST['quantity'];
        $color = $_POST['colorval'];
        $size = $_POST['sizeval'];
        $prid = $_POST['prid'];
        $userid = $_SESSION['userid'];
        if($tedad < 1 ) {
            $tedad = 1;
        }


        $inser_cart = "INSERT INTO cart_db (user_id, pr_id, tedad, color , size) VALUES ($userid,$prid,$tedad,'$color','$size')";

        if(mysqli_query($conn, $inser_cart)){
            header("Location: ../shop-cart.php?add=ok");
            exit();
        }
    }else{
        header("Location: ../shop-product.php?tedad=false");
        exit();
    }

