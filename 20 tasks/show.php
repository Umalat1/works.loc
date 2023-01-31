<?php 
	$sql = "INSERT INTO users(name, surname, username) VALUES (:name, surname, username)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['name'=>$name,'surname'=>$surname,'username'=>,$username]);
	header('Location: /workBD/index.php');
 ?>

 <form action="store.php" method="post">
 	<input placeholder="Введите имя" type="text" name="name" class="input">
 	<input placeholder="Введите фамилию" type="text" name="surname" class="input">
 	<input placeholder="Введите имя пользователя" type="text" name="username" class="input">
 	<button type="submit">Добавить</button>
 </form>