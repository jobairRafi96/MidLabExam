<?php
 	session_start();

 	if (!isset($_SESSION['uname'])) {
 		header("location: Login.php");
 	}


 	$un=$_SESSION['uname'];
 	$chp=$_SESSION['cp'];
								  $file = fopen("admin.txt","w");
								  
								  while(! feof($file))  {
									
										fwrite($file, $chp);
										fwrite($file, "|".$un);
										fclose($file);

										header("location: Admin.php");
									}

?>