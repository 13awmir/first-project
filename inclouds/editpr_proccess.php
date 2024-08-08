<?php

if(!empty($_POST['name']) && !empty($_POST['price'])){
    require_once 'constant.php';

    $name = strval($_POST['name']);
    $productid = intval($_POST['productid']);
    $link = strval($_POST['link']);
    $valed = $_POST['valed'];
    $code = strval($_POST['code']);
    $price = strval($_POST['price']);
    $takhfif = strval($_POST['takhfif']);
    $short_desc = strval($_POST['short_desc']);
    $tozihat = strval($_POST['tozihat']);
    $color = strval($_POST['color']);
    $size = strval($_POST['size']);
    $status = intval($_POST['status']);


    $photo = $_FILES['photo'];
    if($photo['name'] != ""){
        $masir_upload = "../uploads/".$photo['name'];
        move_uploaded_file($photo['tmp_name'], $masir_upload);
        $ax = $photo['name'];
        $update_ax = "UPDATE products_db SET photo = '$ax' WHERE id = '$productid'";
        mysqli_query($conn, $update_ax);

    }

    $gallery = $_FILES['gallery'];
    $select_gallery = "SELECT * FROM products_db WHERE id = $productid";
    $result_gallery = mysqli_query($conn, $select_gallery);
    $cur_gallery = mysqli_fetch_assoc($result_gallery);
    $gallery_array = json_decode($cur_gallery['gallery']);
    $x = 0;
    foreach ($gallery['name'] as $g_name){
        if($g_name != ""){
            $masire_upload = "../uploads/".$g_name;
            move_uploaded_file($gallery['tmp_name'][$x], $masire_upload);
            $gallery_array[$x] = $g_name;

        }
        $x++;
    }
    if (count($gallery_array) > 0){
        $gallerys = json_encode($gallery_array);
        $update_ga = "UPDATE products_db SET gallery = '$gallerys' WHERE id = '$productid'";
        mysqli_query($conn, $update_ga);
    }

    
    $update_pr = "UPDATE products_db SET name = '$name', link='$link' ,cat=$valed,cod='$code',price='$price',takhfif='$takhfif',short_desc='$short_desc',tozihat='$tozihat',color='$color',size='$size',status=$status  WHERE id=$productid";

    if(mysqli_query($conn, $update_pr)){
        
        header("Location: ../modir/add_product.php?edit=ok");
        exit();
    }
}else{
    header("Location: ../modir/add_product.php?edit=false");
    exit();
}