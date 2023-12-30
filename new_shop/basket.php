<?php

require_once 'function/function.php';
checking_allBasket()
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/product.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="header layout__content">
    <div class="layout__head">
        <div class="logo typography_h2">Copy Star</div>
        <div class="menu typography_p1">
            <div><a class="link" href="index.php">О нас</a></div>
            <div><a class="link" href="catalog.php" >Каталог</a></div>
            <div><a class="link" href="product.php">Товар</a></div>
            <div><a class="link" href="#" style="color: #0a6ebd">Корзина</a></div>
            <div><a class="link" href="index.php">Где нас найти</a></div>
        </div>
    </div>
</div>
    <div class="products layout__content">
        <?php foreach (checking_basket() as $cards):?>
            <form action="delete_basket.php" method="post">
                <input style="display: none" type="number" name="id" value="<?php echo $cards['id']?>">
                <div class="product">
                    <div class="printer"><img src="pictures/<?php echo $cards['image']?>"></div>
                    <h2 class="product__name"><?php echo $cards['title']?></h2>
                    <div class="product__info-row typography_h4">
                        <span><?php echo $cards['price']?></span>
                    </div class="div-basket">
                    <button style="border: 0" class="button-basket text">Delete</button>
                </div>
            </form>
        <?php endforeach;?>
    </div>
</body>
</html>

