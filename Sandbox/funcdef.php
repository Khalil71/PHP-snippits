<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Functions: Defult Argument Values</title>
	</head>
	<body>
	<?php
	function paint($room="office" ,$color="red") {
		return "The color of the {$room} room is {$color}.<br/>";
	}
	
	echo paint();
	echo paint("bedroom" ,"blue");
	echo paint("bedroom", null);
	echo paint("bedroom");
	echo paint("blue");
	?>
	</body>
</html>