<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>First Page</title>
	</head>
	<body>
	<?php $link_name = "Second Page"; ?>
	
	<?php $id = 5; ?>
	
	<?php $dick = "Jhonson & Jhonson"; ?>
	
	<a href="2nd_page.php?
	id=<?php echo $id; ?>& 
	dick=<?php echo $dick; ?>">
	<?php echo $link_name; ?></a>
	
	</body>
</html>