<?php
require_once 'init.php';

//var_dump(Session::get(Config::get('session.user_session')));
echo Session::flash('success');
$user = new User;
if($user->isLoggedIn()) {
    echo "Привет " . $user->data()->username;
    echo "<p><a href='logout.php'>Logout</a></p>";
    echo "<p><a href='update.php'>Update profile</a></p>";
    echo "<p><a href='chenge_password.php'>Change password</a></p>";
} else {
    echo "<a href='login.php'>Login</a> or ";
    echo "<a href='register.php'>Register</a>";
}



