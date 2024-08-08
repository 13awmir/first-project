<?php

if (isset($_POST['nazar_id'])) {
    require_once 'constant.php';

    $nazar_id = $_POST['nazar_id'];
    $status = $_POST['vaziat'];

    $update = "UPDATE nazarat SET status = '$status' WHERE id = $nazar_id";
    if (mysqli_query($conn, $update)) {
        header('Location: ../modir/nazarat.php?update=success');
        exit();
    }
}