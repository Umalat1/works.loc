<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>discremenant</title>
</head>
<body>
	<?php
		function calc($a, $b, $c) {
			$dis = ($b*$b)-(4*$a*$c);
				$result .= $dis;
			if ($dis > 0) {
				$x1 = (-$b - sqrt($dis) / (2 * $a));
				$x2 = (-$b - sqrt($dis) / (2 * $a));
				$result .= "x1 равен: " . $x1 . "<br>" . "x2 равен: " . $x2;
			}else if ($dis == 0) {
				$x = -$b / 2 * $a;
				$result .= "Корень x1 равен: " . $x1;
			}else{
					$result .= "Нет корней";
			}
			return $result;
		};
		calc(23, 22, 8);
		echo $result;
	?>
</body>
</html>