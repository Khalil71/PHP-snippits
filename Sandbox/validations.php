<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Validations</title>
	</head>
	<body>
	<?php
	//*presence
	$value = "x";
	if(!isset($value) || empty($value)){
echo"Validation failed.<br/>";
	}
	
	//*string length
	//*min length
	$min=3;
	$value="abcd";
	if(strlen($value)<$min){
		echo "Validation failed.<br/>";
	}
	$max=6;
	if(strlen($value)>$max){
		echo "Validation failed.<br/>";
	}
	//*type
	$value="1";
	if(!is_string($value)){
		echo "Validation failed.<br/>";
	}
	//*inclution in set
	$value="1";
	$set = array("1", "2", "3", "4");
	if(!in_array($value, $set)){
		echo "Validation failed.<br/>";
	}
	
	//*uniqueness
	// uses a database to check uniqueness
	
	//*format
	// use a regex on a string
	//preg_match($regex, $subject)
	if(preg_match("/PHP/", "PHP is fun.")){
		echo "Match found";
	} else{
		echo "Match not found";
	}
	$value = "nobody@noware.com";
	if(!preg_match("/@/", $value)){
		echo "Validation failed.<br/>";
	}
	if(strpos($value, "@") === false){
		echo "Validation failed.<br/>";
	}
	?>
	</body>
</html>