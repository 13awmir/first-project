<?php
session_start();
$id = $_SESSION['userid'];
$select_admin = "SELECT * FROM users_db WHERE id = '$id'";
$result_admin = mysqli_query($conn, $select_admin);
$admin = mysqli_fetch_assoc($result_admin);
if ($admin['status'] != 3) {
    header("Location: ../404.html");
    exit();
}
    ?>