<?php

if(!empty($_POST['catname']) && !empty($_POST['catlink'])){
    require_once 'constant.php';
    $name = $_POST['catname'];
    $link = $_POST['catlink'];
    $valed = $_POST['valed'];
    $catid = $_POST['catid'];
    $update = "UPDATE cats_db SET name = '$name', link = '$link', valed = $valed WHERE id = '$catid'";
    if(mysqli_query($conn, $update)){
        header("Location: ../modir/add_cat.php?update=success");
        exit();
    }

}