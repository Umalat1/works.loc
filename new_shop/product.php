<?php session_start();
require_once 'function/function.php';
conclusion_cards()
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet"  href="css/product.css">
  <script src="../product.php"></script>
</head>
<body>
<div class="header layout__content">
  <div class="layout__head">
    <div class="logo typography_h2">Copy Star</div>
    <div class="menu typography_p1">
      <div><a class="link" href="index.php">О нас</a></div>
      <div><a class="link" href="catalog.php">Каталог</a></div>
      <div><a class="link" href="#" style="color: #0a6ebd">Товар</a></div>
      <div><a class="link" href="basket.php">Корзина</a></div>
      <div><a class="link" href="index.php">Где нас найти</a></div>
    </div>
  </div>

  <div class="background">
    <div class="text-catalog">
      <div class="catalog typography_h2 text">
        Суперцены на принтеры!
      </div>
      <div class="text-background typography_h4 text">
        В нашем интернет-магазине любой желающий может купить принтеры<br>
        со скидкой 20%! Предложение ограничено!
      </div>
      <div class="div-button">
        <a class="typography_h4 button text" href="catalog.php">В КАТАЛОГ</a>
      </div>
    </div>

  </div>

</div>
<div class="layout__content">
    <div class="products">
        <?php foreach (conclusion_cards() as $card):?>
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
        <?php endforeach;?>
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
<script>
  cards()
</script>
</html>
