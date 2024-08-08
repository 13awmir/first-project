<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "porozheweb";

$conn = mysqli_connect($server, $user, $password, $database);


if (!$conn){
    die("eror code 01");
}