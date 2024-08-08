<?php

if(!empty($_POST['name']) && !empty($_POST['price'])){
    require_once 'constant.php';

    $name = strval($_POST['name']);
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
    }else{
        $ax= "#";
    }

    $gallery = $_FILES['gallery'];
    $gallery_array = array();
    $x = 0;
    foreach ($gallery['name'] as $g_name){
        if($g_name != ""){
            $masire_upload = "../uploads/".$g_name;
            move_uploaded_file($gallery['tmp_name'][$x], $masire_upload);
            array_push($gallery_array, $g_name);

        }else {
            array_push($gallery_array, "#");
        }
        $x++;
    }
    $gallerys = json_encode($gallery_array);
    

    $insert_pr = "INSERT INTO products_db (name, link ,cat,cod,price,takhfif,short_desc,tozihat,color,size,photo,gallery,status) VALUES ('$name','$link' ,$valed,'$code','$price','$takhfif','$short_desc','$tozihat','$color','$size','$ax','$gallerys',$status)";
    if(mysqli_query($conn, $insert_pr)){
        header("Location: ../modir/add_product.php?add=ok");
        exit();
    }
}else{
    header("Location: ../modir/add_product.php?add=false");
    exit();
}