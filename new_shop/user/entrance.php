<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        <?php echo $_SESSION['user']?>
        <?php if (isset($_SESSION['message'])){ echo $_SESSION['message']; unset($_SESSION['message']);}?>
    </div>
    <form action="enter.php" method="post">
        <div>
            <label for="simpleinput">Name</label>
            <input name="name" type="text">
        </div>
        <div>
            <label for="simpleinput">Surname</label>
            <input name="surname" type="text">
        </div>
        <div>
            <label for="simpleinput">Password</label>
            <input name="password" type="password">
        </div>
        <div>
            <button type="submit">Войти</button>
        </div>
    </form>
    <div><a class="link" href="entrance.php">Зарегестрироваться</a></div>
</div>
</body>
</html>
