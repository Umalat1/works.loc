<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=tasks','root','');

$sql = "SELECT * FROM authorization WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($user);

if(!empty($user)){
    $message = 'Пользователь с таким эл адресом уже существует';
    $_SESSION['message'] = $message;

    header('Location: \20tasks\lesson_15\create.php');
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO authorization (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' =>$email, 'password' => $password]);
header('Location: \20tasks\lesson_15\create.php');

//$hashed_password = password_hash($password, PASSWORD_DEFAULT) - фэширование пароля
