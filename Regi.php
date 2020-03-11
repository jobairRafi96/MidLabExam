

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form method="POST" action="store.php">
		<fieldset>
			<legend>Registration</legend>
			<h4>Id</h4>
			<input type="text" name="userId" value="">
			<h4> Password</h4>
			<input type="Password" name="pass" value=""><br>
			<h4>Confirm Password</h4>
			<input type="Password" name="cpass" value=""><br>
			<h4>NAME</h4>
			<input type="text" name="uname" value=""><br>
			<h4>User Type</h4>
			<input type="radio" name="utype" value="">User
			<input type="radio" name="utype" value="">Admin

			<br><input type="submit" name="submit" value="Sign UP">
			<a href="Login.php">Sign In</a>
		</fieldset>
	</form>

</body>
</html>