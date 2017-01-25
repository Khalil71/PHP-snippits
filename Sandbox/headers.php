<?php
	
	header("HTTP 1.1/404 Not Found");
	header("X-Powered-By: non of your business");
	?>
<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title></title>
	</head>
	<body>
	
	<?php
	//this wont work
	//header("HTTP 1.1/404 Not Found");
	?>
	<pre>
	<?php
	print_r(headers_list());
	?>
	</pre>
	</body>
</html>