<?php
		session_start();
		$userId = $_REQUEST['userId'];
		$uname = $_REQUEST['uname'];
		$utype = $_REQUEST['utype'];
		$password = $_REQUEST['pass'];

				
					$file = fopen('admin.txt', 'a');
					$name = "\n";
					$name.=$uname;
					fwrite($file, $name);
					fwrite($file, "|".$password);
				
					header("location: Login.php");
				


?>