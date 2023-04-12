<?php
    require_once 'init.php';

//    var_dump(Token::check(Input::get('token'))); // false

if (Input::exists()) {
    if (Token::check(Input::get('token'))) { // if не срабатывает
            $validate = new Validate();
//    echo "Привет"; // Проверял if
        $validation = $validate->check($_POST, [
            'email'    => [
                'required' => true,
                'email'    => true,
            ],
            'password' => [
                'required' => true,
            ],
        ]);
        if ($validation->passed()) {
//            echo "Привет"; // Проверял if
            $user = new User();
            $remember = (Input::get('remember')) === 'on' ? true : false;

            $login = $user->login(Input::get('email'), Input::get('password'), $remember);

            Redirect::to("index.php");

        } else {
            foreach ($validation->errors() as $error) {
                echo $error . '<br>';
                echo "Привет";
            }
        }
    }
}
//var_dump($_SESSION);

?>
<form action="" method="post">
    <?php echo Session::flash('success'); ?>
    <div class="field">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?php echo Input::get('email'); ?>">
    </div>
    <div class="field">
        <label for="password">Password</label>
        <input type="text" name="password">
    </div>
    <div class="field">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember</label>
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate();?>">

    <div class="field">
        <button type="submit">Submit</button>
    </div>
</form>