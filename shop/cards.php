<?php

$pdo = new PDO("mysql:host=localhost;dbname=shop;","root","");

$sql = "SELECT * FROM cards WHERE title=:title";
$statement = $pdo->prepare($sql);
$task = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($task['image']['title']);
