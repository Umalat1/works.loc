<?php
require_once 'Database.php';
require_once 'Config.php';
require_once 'Volidate.php';
require_once 'Input.php';

$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'test',
        'samething' => [
            'no' => [
                'foo' => [
                    'bar' => 'baz'
                ]
            ],
        ]
    ],

    'config_my' => []
];

if(Input::exists()) {
    $validate = new Validate();

    $validation = $validate->check($_POST, [
        'username' => [
            'require' => true,
            'min' => 2,
            'max' => 15,
            'unique' => 'users'
        ],
        'password' => [
            'require' => true,
            'min' => 3
        ],
        'password_again' => [
            'required' => true,
            'matches' => 'password'
        ]
    ]);

    if($validate->passed()) {
        echo 'possed';
    }else {
        foreach ($validation->errors() as $error) {
            echo $error . "<br>";
        }
    }
}
?>

<form action="store.php" method="post">

    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" values="<?php echo Input?>">
    </div>

    <div class="form-group">
    <label for=""Password</label>
    <input class="form-control" type="text" name="password">
    </div>

    <div class="form-group">
    <label for="">Password Again</label>
    <input class="form-control" type="password" name="password">
    </div>

    <div class="form-group mt-2">
    <button type="submit" class="btn btn-success">Создать</button>

    </div>
</form>
