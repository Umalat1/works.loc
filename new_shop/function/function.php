<?php

    function base($db_name)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=$db_name;","root","");
        return $pdo;
    }

    function conect($name)
    {
        $pdo = base('shop');
        $sql = "SELECT * FROM users WHERE name=:name";
        $statement = $pdo->prepare($sql);
        $statement->execute(["name" => $name]);
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    function add_user($name, $password, $surname)
    {
        $pdo = base('shop');
        $sql = "INSERT INTO users (name, password, surname) VALUES (:name, :password, :surname)";
        $statement = $pdo->prepare($sql);
        $task = $statement->execute(['name' => $name, 'password' => $password, "surname" => $surname]);
        return $task;
    }
    function check_name($name)
    {
        $pdo = base('shop');
        $sql = "SELECT * FROM users WHERE name=:name";
        $statement = $pdo->prepare($sql);
        $statement->execute(['name'=>$name]);
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }
    function check_surname($surname)
    {
        $pdo = base('shop');
        $sql = "SELECT * FROM users WHERE surname=:surname";
        $statement = $pdo->prepare($sql);
        $statement->execute(['surname'=>$surname]);
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }
    function check_password($password)
    {
        $pdo = base('shop');
        $sql = "SELECT * FROM users WHERE password=:password";
        $statement = $pdo->prepare($sql);
        $statement->execute(['password'=>$password]);
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }
    function delete_session($session_name)
    {
        unset($_SESSION[$session_name]);
    }
    function add_cards($image, $title, $price, $type)
    {
        $pdo = base('shop');
        $sql = "INSERT INTO cards (image, title, price, type) VALUES (:image, :title, :price, :type)";
        $statement = $pdo->prepare($sql);
        $statement->execute(["image" => $image['name'], "title" => $title, "price" => $price, "type" => $type]);
    }
    function conclusion_cards(){
        $pdo = base('shop');
        $sql = "SELECT * FROM cards";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $cards = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $cards;
    }
    function delete_cards($id)
    {
        $pdo = base('shop');
        $sql = "DELETE FROM cards WHERE id=$id";
        $statement = $pdo->prepare($sql);
        $delete = $statement->execute();
        return $delete;
    }
    function basket($image, $title, $price){
        $pdo = base('shop');
        $sql = "INSERT INTO basket (image, title, price) VALUES (:image, :title, :price)";
        $statement = $pdo->prepare($sql);
        $statement->execute(["image" => $image, "title" => $title, "price" => $price]);
    }
    function checking_IDBasket($id)
    {
        $pdo = base('shop');
        $sql = "SELECT * FROM basket WHERE id=:id";
        $statement = $pdo->prepare($sql);
        $statement->execute(['id'=>$id]);
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }
    function checking_allBasket(){
        if (isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if (isset($id)) {
            if (empty(checking_IDBasket($id))) {
                foreach (conclusion_cards() as $card) {
                    if ($card['id'] == $id) {
                        $image = $card['image'];
                        $title = $card['title'];
                        $price = $card['price'];
                        basket($image, $title, $price);
                    }
                }
            }
        }
    }
    function checking_basket(){
        $pdo = base('shop');
        $sql = "SELECT * FROM basket";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $cards = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $cards;
    }
    function delete_basket($id)
    {
        $pdo = base('shop');
        $sql = "DELETE FROM basket WHERE id=$id";
        $statement = $pdo->prepare($sql);
        $delete = $statement->execute();
        return $delete;
    }
