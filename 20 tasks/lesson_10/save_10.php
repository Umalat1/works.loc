<?php
    $text = $_POST['text'];

    $pdo = new PDO("mysql:host=localhost;dbname=tasks","root","");
    $sql = "INSERT INTO my_table (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
    header('Location: \20 tasks\lesson_10\task_10.php');