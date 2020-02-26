<?php

		$userId = $_REQUEST['userId'];
		$uname = $_REQUEST['uname'];
		$utype = $_REQUEST['utype'];
		$password = $_REQUEST['pass'];

				
					$file = fopen('admin.txt', 'a');

					
					
					fwrite($file, $uname.'\n');
	
					fclose($file);	

					// header("location: Login.php");
				


?>