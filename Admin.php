  
<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: Login.php");
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
</head>
<body>
	<fieldset>
		<h1 align="center">Welcome <?php echo $_SESSION['uname']; ?></h1>
		<h3 align="center"><a href="profile.php">Profile</a></h3>
		<h3 align="center"><a href="chan.php">Change Password</a></h3>
		<h3 align="center"><a href="ViewU.php">View Users</a></h3>
		<h3 align="center"><a href="Logout.php">Logout</a></h3>
	</fieldset>

</body>
</html>