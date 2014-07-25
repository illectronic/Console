<? 
/* ini_set('display_errors', 'On');
error_reporting(E_ALL); */
session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dth">
<?

        // include the common header
 	    include ("ssi/db_con.php");
		include ("ssi/File.class.php");
        require_once ("adldap/adLDAP.php");

	$error = '';
	$logFile = '/tmp/console_portal.log';

	//Sets start and end date for initial query to 3 months
	
			$END_DATE=Date("m-d-Y");
			$START_DATE= date('m-d-Y', strtotime('-3 months'));
              
			$_GET['START_DATE']=$START_DATE;
			 $_GET['END_DATE']=$END_DATE;
			  
			  

			  
			  
			  
        //echo "EMPLOYEE_USER_NAME = $EMPLOYEE_USER_NAME";
        if ($_POST["EMPLOYEE_USER_NAME"] != "")
        {

		//----------------------//
		// Encode the password. //
		//----------------------//
               // $EMPLOYEE_PASSWORD = md5($EMPLOYEE_PASSWORD);
                  

	try {
    $adldap = new adLDAP();
	}
	catch (adLDAPException $e) {
		echo $e;
			exit();   
			}

			$authUser = $adldap->authenticate($EMPLOYEE_USER_NAME,$EMPLOYEE_PASSWORD);
            $result=$adldap->user()->inGroup($EMPLOYEE_USER_NAME,"Console-Group");
			if ($authUser == true && $result == true) {
            $adldap->close();

						$_SESSION["S_EMPLOYEE_USER_NAME"]	= $EMPLOYEE_USER_NAME;
						
     


			//-------------------------------//
			// Log login credentials to a    //
			// file in the "/tmp" directory. //
			//-------------------------------//
			$f = new File();

			$f->setFileName( $logFile );
			if( !$f->writeLogFile( 'Console Portal Successful Login.' ) ){
			   $error .= $f->getError();
	  		}




			//----------------------------------//
			// Set the default landing page for //
			// Ann Turner to be compliance, if  //
			// she is a member of both Legal    //
			// and Compliance groups.           //
			//----------------------------------//
			
	
			if ($_SESSION["S_EMPLOYEE_USER_NAME"])
               {
				header ("Location: main.php?OWNER=%&STATUS=%&START_DATE=$START_DATE&END_DATE=$END_DATE&CONTROL_ID=&NEW_STATUS=&CHANGE_CONTROL=NO");
                }
				else
				{
			      	        //-------------------------------//
                        	// Log login credentials to a    //
                        	// file in the "/tmp" directory. //
                        	//-------------------------------//
                        	$f = new File();

                        	$f->setFileName( $logFile );
                        	if( !$f->writeLogFile( 'Console Portal: Missing login credentials.' ) ){
                                   $error .= '<font color=red>' . $f->getError() . '</font><br/>';
                        	}

			}
	}
	else{
	$error = "<font color=red>Invalid username/password. Please try again.</font>";
	}
}

?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Page - Console</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">Console</span>
									<span class="white">Version 3.013</span>
								</h1>
								<h4 class="blue">&copy; Novantas Inc.</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form enctype='multipart/form-data' action='index.php' method='POST' name="testform">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" name="EMPLOYEE_USER_NAME" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="EMPLOYEE_PASSWORD" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<input type='submit'  name='ok' value='Submit' class="width-35 pull-right btn btn-sm btn-primary">
													
															
														</button>
														<?php
															if ( $error )
															echo "$error<br>";
				

																?>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											

										
								</div><!-- /login-box -->

							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
		
		<?php

echo $result;

?>
	</body>
</html>
