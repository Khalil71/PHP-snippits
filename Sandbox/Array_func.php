<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Array functions</title>
	</head>
	<body>
	<?php $numbers = array(8,23,15,42,16,4); ?>
	
	Count: <?php echo count($numbers); ?> <br/>
	Max Value:<?php echo max($numbers); ?> <br/>
	Min Value:<?php echo min($numbers); ?> <br/>
	<br/>
	<pre>
	Sort: <?php echo sort($numbers); print_r($numbers); ?> <br/>
	Reverse sort: <?php echo rsort($numbers); print_r($numbers); ?> <br/>
	</pre>
	<br/>
	
	Implode:<?php echo $num_string = Implode(" * ", $numbers); ?> <br/>
	Explode:<?php print_r(Explode(" * ", $num_string)); ?><br/>
	<br/>
	15 in an array?: <?php echo in_array(15, $numbers); //returns T/F ?><br/>
	19 in an array?: <?php echo in_array(19, $numbers); //returns T/F ?><br/>
	</body>
</html>