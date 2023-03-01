<?php

require_once 'Database.php';

//$users = Database::getInstance()->query("SELECT * FROM users WHERE username IN (?, ?)", ['Umalat', 'Muhammad']);
//$users = Database::getInstance()->get('users', ['password', '=', "123   "]);
//Database::getInstance()->delete('users', ['username', '=', "Gilani"]);
$users = Database::getInstance()->insert('users', [
    'username' => 'Gilani',
    'password' => "111",
]);

//if($users->error()) {
//    echo 'we have on error';
//} else {
//    foreach ($users->results() as $user) {
//        echo $user->username . "<br>";
//    }
//}

