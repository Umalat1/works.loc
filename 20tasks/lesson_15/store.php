<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$pdo = new PDO('mysql:host=localhost;dbname=tasks','root','');

//var_dump($name); - выводил $name
//exit; - конец кода

$sql = "SELECT * FROM authorization WHERE name=:name";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($user)){
    $message = 'Пользователь с таким именем уже существует';
    $_SESSION['message'] = $message;

    header('Location: \20tasks\lesson_15\create.php');
    exit;
}

$sql = "SELECT * FROM authorization WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($user); - выводил $user

if(!empty($user)){
    $message = 'Пользователь с таким эл адресом уже существует';
    $_SESSION['error'] = $message;

    header('Location: \20tasks\lesson_15\create.php');
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO authorization (name, email, password, number) VALUES (:name, :email, :password, :number)";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name, 'email' =>$email, 'password' => $hashed_password, 'number' => $number]);
header('Location: \20tasks\lesson_15\users.php');

//$hashed_password = password_hash($password, PASSWORD_DEFAULT)
//password_hash - хэширует пароль которые находится в переменной $password
//PASSWORD_DEFAULT - преднозначен для изменения со временем захешированного пароля
