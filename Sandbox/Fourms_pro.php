<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Form Processing</title>
	</head>
	<body>
	
	<pre>
	<?php
	print_r($_POST);
	?>
	</pre>
	<br/>

		<?php
		//detect form submission
		if(isset($_POST['submit'])){
			echo "form was submitted<br/>";
		
		//set defult values
		if (isset($_POST["username"])){
		$username = $_POST["username"];	
		}else{
			$username="";
		}
		if (isset($_POST["password"])){
		$password = $_POST["password"];	
		}else{
			$password="";
		}
		// set defult values using ternary operator
		//boolean test ? value_if_true : value_if_false
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['username'] : "";
		} else{
			$username = "bob";
			$password = "";
		}
		?>
		
		
	<?php
		echo "{$username}: {$password}";
	?>
	</body>
</html>