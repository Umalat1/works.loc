<?php

    $pdo = new PDO ("mysql:host=localhost;dbname=mysql","root","");
    $statement = $pdo->prepare("DELETE * FROM users WHERE id=:id"); 
    $statement->execute();
    
    header('Location: /workBD/index.php')
 ?>