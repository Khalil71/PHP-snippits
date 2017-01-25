<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Foreach loop</title>
	</head>
	<body>
	<?php
	$ages = array(4,8,15,16,23,42);
	foreach ($ages as $age){
		echo "Age: {$age} </br>";
	}
	?>
	<br/>
	<?php
	$person = array(
	"first_name" => "Kevin",
	"last_name"  => "Khalil",
	"adress"	 => "October",
	"city"		 => "8th",
	"state"		 => "Giza",
	"zip_code"	 => "12566"
	);
	foreach($person as $attribute => $data){
		$attr_nice = ucwords(str_replace("_"," ", $attribute));
		echo "{$attr_nice}: {$data} <br/>";
	}
	?>
	<br/>
	<?php
	$prices = array("Breand New Comp" => 2000,
					"1 month of Lynda.com" => 25,
					"Learning PHP" 	=> null
	);
	foreach($prices as $item => $price){
		echo "{$item}: ";
		if (is_int($price)){
			echo "$" . $price;
		} else {
			echo "priceless";
		}
		echo "<br/>";
	}
	?>
	</body>
</html>