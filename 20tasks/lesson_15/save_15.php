<?php

    $email = $_POST['email'];
    $password = $_POST['email'];

    $pdo = new PDO('mysql:host=localhost;dbname=tasks;','root','');

    $sql = "SELECT * FROM authorization WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
    $task = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty())

//    var_dump($_POST);
