<?php

if (!empty($_POST['name_karbar']) && !empty($_POST['message'])) {
    require_once 'constant.php';
    $prid = $_POST['pr_id'];
    $name = $_POST['name_karbar'];
    $email = $_POST['email_karbar'];
    $message = $_POST['message'];

    $inser_nazar = "INSERT INTO nazarat (pr_id,name, email, nazar) VALUES ($prid,'$name', '$email', '$message')";
    if (mysqli_query($conn, $inser_nazar)) {
        header("Location:../shop-product.php?nazarat=success");
        exit();
    }
}