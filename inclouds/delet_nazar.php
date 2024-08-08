<?php
require_once 'constant.php';
$nazarid = $_GET['id'];

$dellet = "DELETE FROM nazarat WHERE id = '$nazarid'";

if(mysqli_query($conn,$dellet)){
    header("Location: ../modir/nazarat.php?deleted=ok");
    exit();
}