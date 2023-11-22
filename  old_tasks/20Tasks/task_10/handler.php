<?php

    $text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=tasks;","root","");
$sql = "INSERT INTO lesson_10 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header('Location: task_10.php');

