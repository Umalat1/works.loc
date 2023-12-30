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
    <div><?php echo $_SESSION['error']?></div>
    <form action="login_save.php" method="post">
        <div><input name="name" type="text"></div>
        <div><input name="surname" type="text"></div>
        <div><input name="password" type="password"></div>
        <div>
            <button type="submit">Зарегестрироваться</button>
        </div>
    </form>
</div>
</body>
</html>
