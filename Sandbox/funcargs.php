<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Functions: Arguments</title>
	</head>
	<body>
	<?php
	function say_hello_to($word){
		echo "Hello {$word}<br/>";
	}
	$name = "mido kimo";
	say_hello_to($name);
	?>
	<br/>
	<?php
	function better_hello($greeting, $target, $punct){
		echo $greeting . " " . $target . $punct . "<br/>";
	}
	
	better_hello("Hello" , $name, "!");
	better_hello("Greetings" , $name, "!");
	?>
	</body>
</html>