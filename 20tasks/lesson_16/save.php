<?php
    session_start();
    $name = $_POST['name'];

    $pdo = new PDO('mysql:host=localhost;dbname=tasks;','root','');

    $sql = "SELECT name FROM lesson_16 WHERE 1";
    $statement = $pdo->prepare($sql);
    $statement->execute(['name' => $name]);
    $task = $statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($task); - выводил $task

    $_SESSION['user'] = $task;
    var_dump($_SESSION['user']);

    header('location: /20tasks/lesson_16/index.php');