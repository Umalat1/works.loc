<?php
require_once 'init.php';

//var_dump(Session::get(Config::get('session.user_session')));

$user = new User;
$anotherUser = new User(18);
if($user->isLoggedIn()) {
    echo "Hi, <a href='#'>{$user->date()->username}</a>";
    echo "<p><a href='logout.php'>Logout</a>  </p>";
} else {
    echo "<a href='login.php'>Login</a> or ";
    echo "<a href='register.php'>Register</a>";
}




