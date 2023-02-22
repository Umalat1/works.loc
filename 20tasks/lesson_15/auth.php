<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];


$pdo = new PDO('mysql:host=localhost;dbname=tasks','root','');


$sql = "SELECT * FROM authorization WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if(empty($user)){

    $_SESSION['error'] = 'Неверный логин или пароль';
    header('Location: \20tasks\lesson_15\auth_from.php');
    exit;
}
if(!password_verify($password, $user['password'])) {

    $_SESSION['error'] = 'Неверный логин или пароль';
    header('Location: \20tasks\lesson_15\auth_from.php');
    exit;
}
    header('Location: \20tasks\lesson_15\index.php');

    $_SESSION['user'] = '<h2>Здраствуйте</h2>' . $email;
    $_SESSION['exit'] = '<a href="exit.php" class="btn btn-danger">Выйти</a>';






//password_hash - хэширует пароль
//password_verify - Проверяет соответствует ли хеш паролю