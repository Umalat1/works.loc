<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

//var_dump($email . $password);
//die;

$pdo = new PDO("mysql:host=localhost;dbname=tasks;", "root","");

$sql = "SELECT * FROM lesson_12 WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(["email" => $email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);
if (!empty($task)){
    $_SESSION["failed"] = "Введенный емайл уже существует";
    header("location:index.php");
    exit();
}
$sql = "INSERT INTO lesson_12 (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$tasks = $statement->execute(["email" => $email, "password" => $password]);

$_SESSION["failed"] = "Успешно зарегистрирован";
header("location:index.php");
