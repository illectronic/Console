<? 
	// log out the user

	session_register("S_EMPLOYEE_USER_NAME");
	$S_EMPLOYEE_USER_NAME = "";

	header ("Location: index.php?error=You%20have%20sucessfully%20logged%20out.");
	session_destroy();
	exit();
?>
