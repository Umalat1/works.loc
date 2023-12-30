<?php

$image = $_POST['image'];
$title = $_POST['title'];
$price = $_POST['price'];

$pdo = new PDO("mysql:host=localhost;dbname=shop;", "root","");

$sql = "INSERT INTO cards (image, title, price) VALUES (:image, :title, :price)";
$statement = $pdo->prepare($sql);
$cards = $statement->execute(['image'=>$image, 'title'=>$title, 'price'=>$price]);
//var_dump($cards);
header("Location:add.php");