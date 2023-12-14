<?php session_start();
include 'add_handler.php'
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

    <div class="content layout__content">
      <div><?php echo $_SESSION['image']?></div>
      <div><?php echo $_SESSION['title']?></div>
      <div><?php echo $_SESSION['price']?></div>
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
