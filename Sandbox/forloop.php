<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>For Loop</title>
	</head>
	<body>
	<?php //while loop
	$count = 0;
	while ($count <= 10){
		echo $count . ", ";
		$count++;
	}
	?>
	<br/>
	<?php
	for ($count = 0; $count <= 10; $count++){
		echo $count . ", ";
	}
	?>
	<br/>
	<?php
	for($count=20; $count>0; $count--){
		if($count % 2 == 0){
		echo "{$count} is even. <br/>";	
		}else{
		echo "{$count} is odd. <br/>";
		}
	}
	?>
	
	</body>
</html>