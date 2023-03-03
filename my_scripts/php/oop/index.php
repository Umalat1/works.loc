<?php

require_once 'Database.php';
require_once 'Config.php';

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

//Database::getInstance()->update('users', 11, [
//    'username' => 'Gilani',
//    'password' => '333'
//]);

$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'test',
    ],
    'config_my' => []
];

$users = Database::getInstance()->query('select * from users');
var_dump($users->results());


