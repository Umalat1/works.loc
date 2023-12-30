<?php

//session_start();


    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO('mysql:host=localhost;dbname=tasks','root','');

    $sql = "SELECT * FROM lesson_12 WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($user)) {
        $_SESSION['error'] = "Пользователь с таким электронным адресом уже существует используйте другой";
        header('location: /20tasks/lesson_12/task_12.php');
        exit;
    }

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO lesson_12 (email, password) VALUES (:email, :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email'=>$email, 'password'=>$hash_password]);

    header('location: /20tasks/lesson_12/task_12.php');

    $sql = "SELECT * FROM task_12 WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($user);

    if(!empty($user)){
        $message = 'Ввденная электронная почта уже занета попробуйте другую';
        $_SESSION['message'] = $message;

        header('Location: \20tasks\lesson_12\task_12.php');
        exit;
    }


    $sql = "INSERT INTO task_12 (email, password) VALUES (:email, :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' =>$email, 'password' => $password]);
    header('Location: \20tasks\lesson_12\task_12.php');

