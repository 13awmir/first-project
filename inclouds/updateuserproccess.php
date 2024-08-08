<?php

if(!empty($_POST['name']) && !empty($_POST['email'])){
    require_once "constant.php";
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $userid = $_SESSION['userid'];
    $update = "UPDATE users_db SET name='$name', email='$email' WHERE id=$userid";

    if(!empty($_POST['password']) && !empty($_POST['npassword']) && !empty($_POST['cpassword'])){
        $password = sha1($_POST['password']);
        $npass = $_POST['npassword'];
        $cpass = $_POST['cpassword'];
        $select = "SELECT * FROM users_db WHERE id= $userid";
        $res = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($res);
        if($password == $row['password']) {
            if($npass == $cpass){
                $newpassword = sha1($npass);
                $update = "UPDATE users_db SET name='$name', email='$email', password = '$newpassword' WHERE id=$userid";
            }else{
                header("location: ../my-account.php?newpass=incorrect");
                exit();
            }
        }else {
            header("location: ../my-account.php?pass=incorrect");
            exit();
        }
    }

    if(mysqli_query($conn, $update)){
        header("location: ../my-account.php?update=success");
        exit();
    }
}else {
    header("Location: ../my-account.php?field=empty");
}