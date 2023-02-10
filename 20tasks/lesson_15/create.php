<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Создание пользователя</h2>

                <?php if(isset($_SESSION['error'])):?>
                    <div class="alert alert-info" role="alert">
                        <?php echo $_SESSION['error'];
                        unset($_SESSION['error']);?>
                    </div>
                <?php endif;?>

                <form action="store.php" method="post">

                    <div class="form-group">
                        <label for="">Ваше имя</label>
                        <input class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Эл. почта</label>
                        <input class="form-control" type="text" name="email">
                    </div>

                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="">номер телефона</label>
                        <input class="form-control" type="text" name="number">
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Создать</button>
                    </div>

                </form>
            </div>
        </div>
</div>
</html>
