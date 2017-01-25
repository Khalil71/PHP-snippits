<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>If</title>
	</head>
	<body>
	<?php
	$a=4;
	$b=3;
	if($a > $b){
		echo "a is lager than b";
	}
	?>
	<br/>
	<?php //only welcome new users
	
	$new_user=true;
	if($new_user){
		echo "<h1>Welcome!</h1>";
		echo "<p>We are glad you can help. </p>";
	}
	?>
	<?php //don't divide by zero
	$numerator=20;
	$denomenator=4;
	if($denomenator > 0){
		$result = $numerator / $denomenator;
		echo "Result: {$result}";
	}
	?>
	</body>
</html>