<?php

require_once 'Database.php';

$users = Database::getInstance()->query("SELECT * FROM users WHERE username IN (?, ?)", ['Umalat', 'Muhammad']);

//var_dump($users->count()); die;
if($users->error()) {
    echo 'we have on error';
} else {
    foreach ($users->results() as $user) {
        echo $user->username . "<br>";
    }
}
die;
