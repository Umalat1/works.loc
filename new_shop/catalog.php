<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/product.css">
    <script src="catalog.php"></script>
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
            <div><a class="link" href="index.php">О нас</a></div>
            <div><a class="link" href="#" style="color: #0a6ebd">Каталог</a></div>
            <div><a class="link" href="product.php">Товар</a></div>
            <div><a class="link" href="basket.php">Корзина</a></div>
            <div><a class="link" href="index.php">Где нас найти</a></div>
        </div>
    </div>
</div>
<div class="content layout__content">
    <div class="nav">
        <div class="text-printer">
            <div class="variety typography_h4">матричные</div>
            <div class="products">
                <?php foreach (conclusion_cards() as $card):?>
                <?php if ($card['type'] == 'matrix'):?>
                <form action="add_basket.php" method="post">
                    <input style="display: none" type="number" name="id" value="<?php echo $card['id']?>">
                    <div class="product">
                        <div class="printer"><img src="pictures/<?php echo $card['image']?>"></div>
                        <h2 class="product__name"><?php echo $card['title']?></h2>
                        <div class="product__info-row typography_h4">
                            <span><?php echo $card['price']?></span>
                        </div class="div-basket">
                        <button style="border: 0" class="button-basket text">в корзину</button>
                    </div>
                </form>

                <?php endif;?>
                <?php endforeach;?>
            </div>
        </div>

        <div class="text-printer">
            <div class="variety typography_h4">сублимационные</div>
            <div class="products">
                <?php foreach (conclusion_cards() as $card):?>
                    <?php if ($card['type'] == 'sublimation'):?>
                        <form action="add_basket.php" method="post">
                            <input style="display: none" type="number" name="id" value="<?php echo $card['id']?>">
                            <div class="product">
                                <div class="printer"><img src="pictures/<?php echo $card['image']?>"></div>
                                <h2 class="product__name"><?php echo $card['title']?></h2>
                                <div class="product__info-row typography_h4">
                                    <span><?php echo $card['price']?></span>
                                </div class="div-basket">
                                <button style="border: 0" class="button-basket text">в корзину</button>
                            </div>
                        </form>

                    <?php endif;?>
                <?php endforeach;?>
            </div>

        </div>

        <div class="text-printer">
            <div class="variety typography_h4">струйные</div>
            <div class="products">
                <?php foreach (conclusion_cards() as $card):?>
                    <?php if ($card['type'] == 'jet'):?>
                        <form action="add_basket.php" method="post">
                            <input style="display: none" type="number" name="id" value="<?php echo $card['id']?>">
                            <div class="product">
                                <div class="printer"><img src="pictures/<?php echo $card['image']?>"></div>
                                <h2 class="product__name"><?php echo $card['title']?></h2>
                                <div class="product__info-row typography_h4">
                                    <span><?php echo $card['price']?></span>
                                </div class="div-basket">
                                <button style="border: 0" class="button-basket text">в корзину</button>
                            </div>
                        </form>

                    <?php endif;?>
                <?php endforeach;?>
            </div>
        </div>

        <div class="text-printer">
            <div class="variety typography_h4">лазерные</div>
            <div class="products">
                <?php foreach (conclusion_cards() as $card):?>
                    <?php if ($card['type'] == 'laser'):?>
                        <form action="add_basket.php" method="post">
                            <input style="display: none" type="number" name="id" value="<?php echo $card['id']?>">
                            <div class="product">
                                <div class="printer"><img src="pictures/<?php echo $card['image']?>"></div>
                                <h2 class="product__name"><?php echo $card['title']?></h2>
                                <div class="product__info-row typography_h4">
                                    <span><?php echo $card['price']?></span>
                                </div class="div-basket">
                                <button style="border: 0" class="button-basket text">в корзину</button>
                            </div>
                        </form>

                    <?php endif;?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div>

    </div>
</div>
<div class="footer text">
    <div class="footer-div layout__content">
        <div class="typography_h2">
            Copy Star
        </div>

        <div><a class="text typography_p1" href="index.php">О нас</a></div>
        <div><a class="text typography_p1" href="#">Каталог</a></div>
        <div><a class="text typography_p1" href="#">Товар</a></div>
        <div><a class="text typography_p1" href="#">Где нас найти</a></div>

        <div class="number">Москва +88005553535</div>
    </div>
</div>
</body>
</html>