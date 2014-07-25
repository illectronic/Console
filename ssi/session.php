<? 
	// this file will check the session

	session_start();

	//session_register("S_EMPLOYEE_ID");
	//session_register("S_EXPENSES[]");
	if ($_SESSION["S_EMPLOYEE_USER_NAME"] == "")
	{
		header ("Location: index.php?error=Your%20session%20has%20timed%20out.%20%20Please%20Log%20in%20again.");
		exit();
	}
?>
