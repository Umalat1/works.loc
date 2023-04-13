<?php
require_once "init.php";

$user = new User();
$validate = new Validate();
$validate->check($_POST,
    [
        'current_password' => ['required' => true, 'min' => 6],
        'new_password' => ['required' => true, 'min' => 6],
        'new_password_again' => ['required' => true, 'min' => 6, 'matches' => 'new_password'],
    ]
);

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        if ($validate->passed()) {

            if(!password_verify(Input::get('current_password'), $user->data()->password)) {
                echo 'Current password is invalid'; exit;
            }
            $user->update(['password' => password_hash(Input::get('new_password'), PASSWORD_DEFAULT)]);
            Redirect::to('chenge_password.php');
        } else {
            foreach ($validate->errors() as $error) {
                echo $error . '<br>';
            }
        }
    }
}

?>

<form action="" method="post">
    <div class="field">
        <label for="username">Current password</label>
        <input type="text" name="current_password" id="username" value="">
    </div>

    <div class="field">
        <label for="username">New password</label>
        <input type="text" name="new_password" id="username" value="">
    </div>

    <div class="field">
        <label for="username">New password again</label>
        <input type="text" name="new_password_again" id="username" value="">
    </div>

    <div class="field">
        <button type="submit">Submit</button>
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate();?>">

</form>
