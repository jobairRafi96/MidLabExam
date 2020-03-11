<?php
 	session_start();

 	if (!isset($_SESSION['uname'])) {
 		header("location: Login.php");
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<table border="1" align="center" width="40%">
		<tr>
			<td colspan="2">
				<h1 align="center">Profile</h1>
			</td>
		</tr>
		<tr>
			<td>
				<h3>ID</h1>
			</td>
			<td>
				16-33940-1
			</td>
		</tr>
		<tr>
			<td>
				<h3>NAME</h1>
			</td>
			<td>
				Rafi
			</td>
		</tr>
		<tr>
			<td>
				<h3>USER TYPE</h1>
			</td>
			<td>
				Admin
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<h3 align="right">
					
					<a href="User.php">Go Home</a></h1>
			</td>
		
		</tr>
	</table>

</body>
</html>