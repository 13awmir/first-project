<?php

$catid = $_GET['id'];
require_once 'constant.php';

$deletcat = "DELETE FROM cats_db WHERE id = '$catid'";

if(mysqli_query($conn, $deletcat)){
    header("location: ../modir/add_cat.php?delete=ok");
    exit();
}