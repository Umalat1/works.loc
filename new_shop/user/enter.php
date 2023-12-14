<?php
session_start();
require_once '../function/function.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];

if(empty(check_name($name) && check_surname($surname) && check_password($password))){
    $_SESSION['message'] = "Неправельное имя или пароль";
    header("Location: entrance.php");
    exit();
}
$_SESSION['user'] = $name;
header("Location: ../index.php");

