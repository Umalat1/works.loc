<?php
session_start();
require_once '../function/function.php';

$name = $_POST['name'];
$password = $_POST['password'];
$surname = $_POST['surname'];

if (!empty(conect($name))){
    echo $_SESSION['error'] = "такой пользователь уже есть";
    header("Location: registretion.php");
    exit;
}

add_user($name, $password, $surname);