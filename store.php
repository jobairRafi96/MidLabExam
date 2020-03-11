<?php
		session_start();
		$userId = $_REQUEST['userId'];
		$uname = $_REQUEST['uname'];
		$utype = $_REQUEST['utype'];
		$password = $_REQUEST['pass'];
		$cpassword =$_REQUEST['cpass'];


				if (empty(trim($password)) == empty(trim($cpassword))) {
					
				
				
					$file = fopen('admin.txt', 'a');
					$pass = "\n";
					$pass.=$password;
					fwrite($file, $pass);
					fwrite($file, "|".$uname);
				
					header("location: Login.php");
				
					}
				else {
					echo "pass dont match";
				}

?>