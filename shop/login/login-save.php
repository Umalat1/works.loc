<?php
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=shop;", "root", "");
$sql = "SELECT * FROM users WHERE name=:name, surname=:surname, password=:password";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name, 'surname' => $surname, 'password' => $password]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($user)){
    $_SESSION['error'] = "Такой полыльзователь уже существует";
    header('location: login.php');
    exit();
}

$hash_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, surname, password) VALUES (:name, :surname, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name, 'surname' => $surname, 'password' => $hash_password]);

header('location: task_1.php');
