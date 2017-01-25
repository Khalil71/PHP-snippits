<?php
//this is how you redirect to a new page
function red_to($new_location){
header("Location: " . $new_location);
exit;
}
$logged_in = $_GET['logged_in'];
if ($logged_in == "1"){
	red_to("basic.html");
}	else{
	red_to("http://google.com");
}
red_to("basic.html")
?>

<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Rederect</title>
	</head>
	<body>
	
	</body>
</html>