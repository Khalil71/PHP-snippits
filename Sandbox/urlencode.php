<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>urlencode</title>
	</head>
	<body>
	<?php 
	$page = "Will Shake";
	$quote = "To be";
	$link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);
	$link2 = "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);
	echo $link1 . "<br/>";
	echo $link2 . "<br/>";
	?>
	</body>
</html>