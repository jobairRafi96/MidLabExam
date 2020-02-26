  
<?php
 	session_start();

 	if (!isset($_SESSION['uname'])) {
 		header("location: Login.php");
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER PAGE</title>
</head>
<body>
	<fieldset>
		<h1 align="center">Welcome <?php echo $_SESSION['uname']; ?></h1>
		<h3 align="center"><a href="profile.php">Profile</a></h3>
		<h3 align="center"><a href="#">Change Password</a></h3>
		<h3 align="center"><a href="Logout.php">Logout</a></h3>
	</fieldset>

</body>
</html>