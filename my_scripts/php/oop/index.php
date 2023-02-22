<?php


include_once "database.php";

$users = Database::getInstance()->get('users', ['username', '=', 'Kirill']);
$password = Database::getInstance()->get('users', ['password', '=', '123']);
//var_dump($users);die();


//var_dump($users->error());

if ($users->error()) {
    echo "This Error";
} else {
    foreach ($users->result() as $user) {
        echo $user["id"] . " " . $user["username"] . "<br>";
    }
}