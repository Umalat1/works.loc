<?php
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=shop;", "root", "");

if ($name == 'Умалат' && $surname == 'Умалатов' && $password = '123'){
    header('location: login.php');
    exit();
}

$sql = "SELECT * FROM users WHERE name=:name, surname=:surname, password=:password";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name, 'surname' => $surname, 'password' => $password]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
if ($name == name && $surname == surname && $password = password){
    header('location: task_1.php');
} else {
    $_SESSION['fail'] = 'Токого пользователя нет';
}


