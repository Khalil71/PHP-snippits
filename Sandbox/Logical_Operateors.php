<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Logical Operators</title>
	</head>
	<body>
	<?php
	$a=4;
	$b=3;
	$c=1;
	$d=20;
	if(($a > $b) || ($c > $d)){
		echo "a is larger than b OR ";
		echo "c is larger than d";
	}
	?>
	<br/>
	<?php
	$e=100;
	if(!isset($e)){
		$e = 200;
	}
	echo $e;
	?>
	<br/>
	<?php
	$quantity = "";
	if(empty($quantity) && !is_numeric($quantity)){
		echo "You must enter a quantity.";
	}
	
	?>
	
	
	</body>
</html>