<?php

if(!empty($_POST['catname']) && !empty($_POST['catlink'])){
    require_once 'constant.php';

    $catname = strval($_POST['catname']);
    $catlink = strval($_POST['catlink']);
    $valed = $_POST['valed'];

    $insert_cats = "INSERT INTO cats_db (name, link ,valed) VALUES ('$catname','$catlink' ,$valed)";
    if(mysqli_query($conn, $insert_cats)){
        header("Location: ../modir/add_cat.php?add=ok");
        exit();
    }
}else{
    header("Location: ../modir/add_cat.php?add=false");
    exit();
}