<?php
require_once '../function/function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="delete_menu layout__content">
    <div><a class="link" href="add.php">Добавить</a> </div>
    <div><a class="link" href="delete.php">Удалить</a></div>
    <div><a class="link" href="../index.php">Вернуться к сайту</a></div>
</div>
<div class="products layout__content">
    <?php foreach (conclusion_cards() as $card):?>
        <form action="delete_handler.php" method="post">
            <input style="display: none" type="number" name="id" value="<?php echo $card['id']?>">
            <div class="product">
                <div class="printer"><img src="../pictures/<?php echo $card['image']?>"></div>
                <h2 class="product__name"><?php echo $card['title']?></h2>
                <div class="product__info-row typography_h4">
                    <span><?php echo $card['price']?></span>
                </div class="div-basket">
                <button style="border: 0" class="button-basket text">Delete</button>
            </div>
        </form>

    <?php endforeach;?>
</div>

</body>
</html>

