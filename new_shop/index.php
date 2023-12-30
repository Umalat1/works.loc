<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet"  href="css/style.css">
    <script src="product.php"></script>
</head>

<?php
require_once 'function/function.php';
conclusion_cards()
?>
<body>
    <div class="header layout__content">
        <div class="layout__head">
            <div class="logo typography_h2">Copy Star</div>
            <div class="menu typography_p1">
                <div><a class="link"  href="#" style="color: #0a6ebd">О нас</a></div>
                <div><a class="link" href="catalog.php">Каталог</a></div>
                <div><a class="link" href="product.php">Товар</a></div>
                <div><a class="link" href="basket.php">Корзина</a></div>
                <div><a class="link" name="location">Где нас найти</a></div>
                <div>
                    <?php if(isset($_SESSION['user'])){?>
                    <a class="link" href="user/delete.php">
                        Logout
                    </a>
                        <div><?php echo $_SESSION['user']?></div>
                    <?php } else{?>
                    <a class="link" href="user/registretion.php">
                        login
                    </a>
                    <?php };?>
                </div>
            </div>
        </div>


        <div class="background">
            <div class="background-text typography_h4">
                В Copy Star скидки<br> до 20% <br>ПРЕДЛОЖЕНИЕ ОГРАНИЧЕННО!!!
            </div>
            <div class="div-button">
                <a class="typography_h4 button text" href="catalog.php">В КАТАЛОГ</a>
            </div>
        </div>

    </div>

    <div class="delivery layout__content">
        <div class="delivery-image"><img src="pictures/qqqq.png"></div>
        <div class="delivery-text">
            <div class="delivery-head typography_h1">КАК ПРОХОДИТ<br> ПОКУПКА</div>
            <div class="delivery-text1 typography_h2">Выберите нужный вам товар,
                                        оформите заказ, доставим в течении недели
            </div>
            <div class="delivery-text1 typography_h2">ЖДИТЕ</div>
        </div>
    </div>

    <div  class="location layout__content">
        <img name="location" src="pictures/map.jpg">
    </div>

    <div class="layout__content">
        <div class="comment">
            <div class="comment-div">
                <div class="image-name typography_h4">
                    <div class="image"><img src="pictures/rg.jpg"></div>
                    <div class="name">Райан Гослинг</div>
                </div>
                <div class="comment-text">Хороший сайт, все работает замечательно,<br>
                    доброжелательный персонал. Недавно заказал<br>
                    принтер пришел во время и целым, на<br>
                    протижении всей доставки видел где<br>
                    принтер, очень удобно всем рекомендую<br>
                    и буду заказывать только в этом<br>
                    сайте удачного дня, доброй ночи</div>
            </div>
            <div class="comment-div">
                <div class="image-name typography_h4">
                    <div class="image"><img src="pictures/rg.jpg"></div>
                    <div class="name">Райан Гослинг</div>
                </div>
                <div class="comment-text">Хороший сайт, все работает замечательно,<br>
                    доброжелательный персонал. Недавно заказал<br>
                    принтер пришел во время и целым, на<br>
                    протижении всей доставки видел где<br>
                    принтер, очень удобно всем рекомендую<br>
                    и буду заказывать только в этом<br>
                    сайте удачного дня, доброй ночи</div>
            </div>
            <div class="comment-div">
                <div class="image-name typography_h4">
                    <div class="image"><img src="pictures/rg.jpg"></div>
                    <div class="name">Райан Гослинг</div>
                </div>
                <div class="comment-text">Хороший сайт, все работает замечательно,<br>
                    доброжелательный персонал. Недавно заказал<br>
                    принтер пришел во время и целым, на<br>
                    протижении всей доставки видел где<br>
                    принтер, очень удобно всем рекомендую<br>
                    и буду заказывать только в этом<br>
                    сайте удачного дня, доброй ночи</div>
            </div>
        </div>

        </div>
</body>
<!--<script>-->
<!--    $image = --><?php //$_SESSION["image"]?>
//    $name = <?php //$_SESSION["name"]?>
//    $sum = <?php //$_SESSION["sum"]?>
//    cards2($image, $name, $sum)
//</script>
</html>
