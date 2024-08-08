<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    require_once 'constant.php';

    $name = strval($_POST["name"]);
    $email = strval($_POST["email"]);
    $password = strval($_POST["password"]);
    $pswrd = sha1($password);

    $check_email = "SELECT * FROM users_db WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);
    $counter = mysqli_num_rows($result);

    if ($counter > 0) {
        header("location: ../signup.php?email=exist");
        exit();
    } else {
        $insert = "INSERT INTO users_db (name, email, password) VALUES ('$name', '$email', '$pswrd')";
        if (mysqli_query($conn, $insert)) {
            $last_id = mysqli_insert_id($conn);
            session_start();
            $_SESSION['userid'] = $last_id;
            $_SESSION['login'] = 'ok';



            header('Location: ../my-account.php');
            exit();
        } else {
            header("location: ../signup.php?register=failed");
            exit();
        }
    }
} else {
    header("Location: ../404.htm");
    exit();
}
?>
