<?php
    session_start();

    $text = $_POST['text'];

    $message = $text;

    $_SESSION['message'] = $message;

    header('Location: \20tasks\lesson_13\task_13.php');


//    var_dump($text);

