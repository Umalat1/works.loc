<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//var_dump($email . $password);
$pdo = new PDO("mysql:host=localhost;dbname=tasks;","root","");

$sql = "SELECT * FROM lesson_15 WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(["email" => $email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

//var_dump($task);
//die;
if (empty($task)){
    $_SESSION['email'] = "Неправильный емайл";
    header("location:index.php");
    exit();
}
$sql = "SELECT * FROM lesson_15 WHERE password=:password";
$statement = $pdo->prepare($sql);
$statement->execute(["password" => $password]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (empty($task)){
    $_SESSION['password'] = "Неправильный пароль";
    header("location:index.php");
}