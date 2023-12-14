<?php

require_once 'function/function.php';

$id = $_POST['id'];
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
    <div class="products layout__content">
        <?php foreach (conclusion_cards() as $card):?>
            <?php if ($card['id'] == $id):?>
                <div class="product">
                    <div class="printer"><img src="pictures/<?php echo $card['image']?>"></div>
                    <h2 class="product__name"><?php echo $card['title']?></h2>
                    <div class="product__info-row typography_h4">
                        <span><?php echo $card['price']?></span>
                    </div class="div-basket">
                    <button style="border: 0" class="button-basket text">Delete</button>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
</body>
</html>

