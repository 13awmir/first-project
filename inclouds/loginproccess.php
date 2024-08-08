<?php
if(isset($_POST["email"]) && isset($_POST["password"])){
    require_once 'constant.php';


    $email = strval($_POST["email"]);
    $password = strval($_POST["password"]);
    $pswrd = sha1($password);
    $check_user = "SELECT * FROM users_db WHERE email = '$email' AND password = '$pswrd'";
    $result = mysqli_query($conn, $check_user);
    $user = mysqli_fetch_assoc($result);
    $counter = mysqli_num_rows($result);
    if (isset($_POST['checkbox'])) {
        $email = sha1($_POST["email"]);
        $password = $pswrd;
        setcookie('user_email', $email, time() + 3600, '/');
        setcookie('user_password', $password, time() + 3600, '/');
    }

    if($counter == 1){
        session_start();
        $_SESSION['userid'] = $user['id'];
        $_SESSION['login'] = 'ok';
        header('Location: ../my-account.php');
        exit();
    }else{
        header("location: ../login.php?register=failed");
        exit();
    }
}else{
    die();
}