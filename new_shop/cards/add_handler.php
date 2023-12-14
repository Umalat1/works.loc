<?php
require_once '../function/function.php';
$image = $_FILES['image'];
$title = $_POST['title'];
$price = $_POST['price'];
$type = $_POST['type'];

add_cards($image, $title, $price, $type);

header("Location: add.php");