<?php
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO("mysql:host=localhost;dbname=tasks","root","");

    $sql = "UPDATE authorization SET email=:email, password=:password, WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);
    header('Location: lesson_8.php');
?>