<?php 

	$pdo = new PDO ("mysql:host=localhost;dbname=mysql","root","");
	$statement = $pdo->prepare("SELECT * FROM users WHERE id=:id");
	$statement->execute($_GET);
	$user = $statement->fetch(PDO::FETCH_ASSOC);

?>

<h2>Edit</h2>
<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
	<input class="input" placeholder="Введите имя" type="text" name="name" value="<?php echo $user['name']; ?>">
	<input class="input" placeholder="Введите фамилию" type="text" name="surname" value="<?php echo $user['surname']; ?>">
	<input class="input" placeholder="Введите имя пользователя" type="text" name="username" value="<?php echo $user['username']; ?>">
	<button type="submit">edit user</button>
</form>