<?php

session_start();

$text = $_POST['text'];

if (empty($text)){
    $_SESSION['null'] = "Нет текста";
    header("location:index.php");
    exit();
}

$pdo = new PDO("mysql:host=localhost;dbname=tasks;", "root","");


$sql = "SELECT * FROM lesson_11 WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(["text" => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)){
    $_SESSION['error'] = "Введенный текст есть в таблице";
    header("location:index.php");
    exit();
}
$sql = "INSERT INTO lesson_11 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(["text" => $text]);

$_SESSION['success'] = "Введенного текста нет в таблице";

header("location:index.php");


