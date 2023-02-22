<?php session_start()?>

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
<body>
    <?php
    if(empty($_SESSION['user'])){
        $_SESSION['error'] = '<h2>Вы не зарегестрированы</h2>';
        $_SESSION['enter'] = '<a href="auth_from.php" class="btn btn-info">Войти</a>';
        $_SESSION['registration'] = '<a href="auth_from.php" class="btn btn-info">Зарегестрироватьтся</a>';
    }?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION['user'])):?>
                    <?php echo $_SESSION['user'];
                    unset($_SESSION['user']);?>
                <?php endif;?>

                <?php if(isset($_SESSION['error'])):?>
                    <?php echo $_SESSION['error'];
                    unset($_SESSION['error  ']);?>
                <?php endif;?>
                <div>
                    <?php if(isset($_SESSION['exit'])):?>
                        <?php echo $_SESSION['exit'];
                        unset($_SESSION['exit']);?>
                    <?php endif;?>

                    <?php if(isset($_SESSION['enter'])):?>
                        <?php echo $_SESSION['enter'];
                        unset($_SESSION['enter']);?>
                    <?php endif;?>

                    <?php if(isset($_SESSION['registration'])):?>
                        <?php echo $_SESSION['registration'];
                        unset($_SESSION['registration']);?>
                    <?php endif;?>

                </div>
                <br>
                <a href="users.php" class="btn btn-info">Список пользователей</a>
            </div>

        </div>
    </div>
</body>
</html>