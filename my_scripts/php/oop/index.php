<?php

require_once 'Database.php';

//$users = Database::getInstance()->query("SELECT * FROM users WHERE username IN (?, ?)", ['Umalat', 'Muhammad']);

//$users = Database::getInstance()->get('users', ['password', '=', "123   "]);
//if($users->error()) {
//    echo 'we have on error';
//} else {
//    foreach ($users->results() as $user) {
//        echo $user->username . "<br>";
//    }
//}

//Database::getInstance()->delete('users', ['username', '=', "Gilani"]);

//$users = Database::getInstance()->insert('users', [
//    'username' => 'Gilani',
//    'password' => "111",
//]);

Database::getInstance()->update('users', 11, [
    'username' => 'Gilani',
    'password' => '333',
]);


