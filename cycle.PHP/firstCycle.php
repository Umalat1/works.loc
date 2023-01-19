<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cycle</title>
</head>
<body>
	<ol>
		<?php
			$i = 0;
			while ($i <= 11){
			echo $i++ . "<br>";
		};
		?>
	</ol>
	<ol>
		<?php
			for($i = 0; $i <= 11; $i++){
				echo $i . "<br>";
		}
		?>
	</ol>
	<ol>
		<?php
			$i = 0;
			do {
				$i++;
				echo $i . "<br>";
			}while ($i <= 10);
		?>
	</ol>


	<?php
		for($i = 0; $i <= 11; $i++){

		} 
	?>

</body>
</html>