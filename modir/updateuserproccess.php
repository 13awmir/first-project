<?php



if (isset($_POST['name'])) {
    require_once '../inclouds/constant.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['ramz'];
    $status = $_POST['status'];
    if(!empty($password)){
        $pswrd = sha1($password);
        $update = "UPDATE users_db SET name='$name',email='$email',password='$pswrd',status='$status' WHERE id='$id'";
    }else {
        $update = "UPDATE users_db SET name='$name',email='$email' , status = $status WHERE id='$id'";
    }
    if (mysqli_query($conn, $update)) {
        header("Location: user_list.php?update=success");
    }
}