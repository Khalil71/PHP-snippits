<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Functions: Defining</title>
	</head>
	<body>
	<?php
	function say_hello(){
		echo "Hello World <br/>";
	}
	say_hello();
	
	function say_hello_to($word){
		echo "Hello {$word}<br/>";
	}
	say_hello_to("Me!");
	say_hello_to("them!");
	
	say_hello_loudly();
	function say_hello_loudly(){
		echo "Hello WORLD<br/>";
	}
	
	?>
	</body>
</html>