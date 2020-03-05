<?php
//SESSION NEEDS to be start in every page
	session_start();
//if submit button was clicked then storing the name/pass and doing the validation
	if (isset($_REQUEST['submit'])) {
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['pass'];
		$utype = $_REQUEST['utype'];

				if ( empty($utype) || empty(trim($uname)) || empty(trim($password)) ) {
					echo "Null submission";
				}

		
				elseif($utype == "admin") {


								  $fn = fopen("admin.txt","r");
								  
								  while(! feof($fn))  {
									$result = fgets($fn);

									$data= explode('|', $result);

									if (trim($data[0]) == $uname && trim($data[1])== $password) {

											$_SESSION['uname'] = $uname;
											$_SESSION['pass'] = $password;

											header("location: Admin.php");
										}
										else{
											echo "invalid uname/password";
											break;
										}
									
								  }

								  fclose($fn);
						

								  }



					// 	$file = fopen('admin.txt', 'r');
				
					// 	$user =fread($file, filesize('admin.txt'));

					// 	$data= explode('|', $user);

					// 	if (trim($data[0]) == $uname && trim($data[1])== $password) {

					// 		$_SESSION['uname'] = $uname;
					// 		$_SESSION['pass'] = $password;

					// 		header("location: Admin.php");
					// 	}
					// 	else{
					// 		echo "invalid uname/password";
					// 	}
					// }

			

					else{
						echo "Invalid User";
					}

		

		
	}
	else{
		echo "Invalid request..please login first";
		header("location: login.php");
	}
?>