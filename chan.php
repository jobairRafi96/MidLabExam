<?php
 	session_start();

 	if (!isset($_SESSION['uname'])) {
 		header("location: Login.php");
 	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
</head>
<body>

	<form method="POST" action="changep.php">
		<fieldset>
			<legend>change password</legend>
			<h4>new  Password</h4>
			<input type="Password" name="cp" value=""><br>
			<hr><br>
			<input type="submit" name="submit" value="done">
			<a href="admin.php">back</a>
		</fieldset>
	</form>

</body>
</html>
