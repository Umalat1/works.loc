<?php

require_once 'Database.php';
require_once 'Config.php';
require_once 'Input.php';
require_once 'Validate.php';

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

$GLOBALS["config"] = [
    'mysql'   => [
        "host"      => "localhost",
        "username"  => "root",
        "password"  => "",
        "database"  => "test",
        "something" => [
            "no" => [
                "foo" => [
                    "bar" => "baz"
                ]
            ]
        ]
    ],
    'session' => [
        'token_name' => 'token',
    ]
];

//$users = Database::getInstance()->query('SELECT * FROM users');

if (Input::exists()) {
    $validate = new Validate();

    $validation = $validate->check($_POST, [
        'username' => [
            'required' => true,
            'min' => 2,
            'max' =>15,
            'unique' => 'users'
        ],
        'password' => [
            'required' => true,
            'min' => 3
        ],
        'password_again' => [
        'required' => true,
        'matches' => 'password'
    ]
    ]);

    if ($validation->passed()) {
        echo 'passed';
    } else {
        foreach ($validation->errors() as $error) {
            echo $error . "<br>";
        }
    }
}
?>


<form action="" method="post">
    <div class="filed">
        <label for="">Username</label>
        <input type="text" name="username" value="<?php echo Input::get('username')?>">
    </div>

    <div class="filed">
        <label for="">Password</label>
        <input type="text" name="password">
    </div>

    <div class="filed">
        <label for="">Password_again</label>
        <input type="text" name="password_again">
    </div>

    <div class="filed">
        <button type="submit">Submit</button>
    </div>


