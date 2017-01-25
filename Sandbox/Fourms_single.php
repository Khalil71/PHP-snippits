<?php
		require_once("included_func.php");
		if(isset($_POST['submit'])){
				$username = $_POST["username"];
				$password = $_POST["password"];
			if ($username == "mido" && $password == "kimo"){
				//successful login
				redirect_to("basic.html");
			}else{
			$message = "There were some errors.";
			}
		}else{
			$username = "";
			$message = "Please log in";
		}
?>
<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>
	<?php echo $message; ?><br/>
	<form action="Fourms_single.php" method="post">
		Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /> <br/>
		Password: <input type="password" name="password" value="" /> <br/>
		<br/>
		<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>