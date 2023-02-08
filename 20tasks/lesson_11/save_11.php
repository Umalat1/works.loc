<?php
    session_start();

    $text = $_POST['text'];

    $pdo = new PDO("mysql:host=localhost;dbname=tasks;", "root", "");

    $sql = "SELECT * FROM task_11 WHERE text=:text";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
    $task = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($task)) {
        $message = "Вденая запись уже присутствует в таблице.";
        $_SESSION['message'] = $message;

        header('Location: \20tasks\lesson_11\task_11.php');
        exit;

    }


    $sql = "INSERT INTO task_11 (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text'=>$text]);

    header('Location: \20tasks\lesson_11\task_11.php');