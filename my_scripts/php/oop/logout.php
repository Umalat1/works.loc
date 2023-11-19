<?php


require_once 'init.php';

$user = new User;
$user->logout();

Redirect::to('task_1.php');