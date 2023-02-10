<?php
    session_start();

    $name = $_POST['email'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    var_dump($_POST);
    exit;

    $pdo = new PDO("mysql:host=localhost;dbname=tasks","root","");

    $sql = "UPDATE authorization SET name=:name, email=:email, password=:password, number=:number WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);
    header('Location: \20tasks\lesson_15\users.php');
?>