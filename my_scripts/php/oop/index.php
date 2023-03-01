<?php

require_once 'Database.php';

//Database::getInstance();
//Database::getInstance();
$users = Database::getInstance()->query("SELECT * FROM users");

//var_dump($users->count()); die;
if($users->error()) {
    echo 'we have on error';
} else {
    foreach ($users->results() as $user) {
        echo $user->username . "<br>";
    }
}
die;
//var_dump($users);
