<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Constants</title>
	</head>
	<body>
	
	<?php 
		$max_width=980;
		
		define("MAX_WIDTH", 980);
		echo MAX_WIDTH;
	?>
	<br/>
	<?php //cant change the value
	//MAX_WIDTH += 1
	//echo MAX_WIDTH;
	?>
	<br/>
	<?php //cant redefine the value
	//define("MAX_WIDTH", 981);
	//echo MAX_WIDTH;
	?>
	</body>
</html>