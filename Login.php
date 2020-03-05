<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="POST" action="LoginCheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<h4>User Type</h4>
			<input type="radio" name="utype" value="user">User
			<input type="radio" name="utype" value="admin">Admin
			<h4> User Id</h4>
			<input type="text" name="uname" value="">
			<h4> Password</h4>
			<input type="Password" name="pass" value=""><br>
			<hr><br>
			<input type="submit" name="submit" value="Login">
			<a href="Regi.php">Register</a>
		</fieldset>
	</form>

	

</body>
</html>