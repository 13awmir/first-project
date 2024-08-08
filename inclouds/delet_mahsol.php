<?php
require_once 'constant.php';
$prid = $_GET['id'];

$del = "DELETE FROM products_db WHERE id = '$prid'";
if (mysqli_query($conn, $del)) {
    header("location: ../modir/pr_list.php?delete=ok");
    exit();
}