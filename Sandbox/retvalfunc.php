<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Retuning value from a Funtion</title>
	</head>
	<body>
	<?php
	function add($val1, $val2){
		$sum = $val1 + $val2;
		return $sum;
	}
	 $result1 = add(3,4);
	 $result2 = add(5, $result1);
	 echo $result2;
	?>
	<br/>
	<?php
	function chinese_zodiac($year){
		switch (($year-4)%12){
			case  0: return 'Rat';
			case  1: return 'Ox';
			case  2: return 'Tiger';
			case  3: return 'Rabbit';
			case  4: return 'Dragon';
			case  5: return 'Snake';
			case  6: return 'Horse';
			case  7: return 'Goat';
			case  8: return 'Monkey';
			case  9: return 'Rooster';
			case 10: return 'Dog';
			case 11: return 'Pig';
		}
	}
	
	$zodiac = chinese_zodiac(2016);
	echo "2013 is the Year of the {$zodiac}.<br/>";
	
	echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br/>";
	?>
	<br/>
	<?php
	function better_hello($greeting, $target, $punct){
		return $greeting . " " . $target . $punct . "<br/>";
	}
	echo better_hello("Hello", "Mido Kimo", "!");
	?>
	</body>
</html>