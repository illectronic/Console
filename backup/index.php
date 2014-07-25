<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dth">
<?


        // include the common header
 	    include ("ssi/db_con.php");
		include ("ssi/File.class.php");
        require_once ("adldap/adLDAP.php");

	$error = '';
	$logFile = '/tmp/console_portal.log';



        //echo "EMPLOYEE_USER_NAME = $EMPLOYEE_USER_NAME";
        if ($EMPLOYEE_USER_NAME != "")
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
			if ($authUser == true) {

            $adldap->close();
            $m_sql = "SELECT * FROM USER_ACCESS WHERE EMPLOYEE_USER_NAME = :employee_user_name";

                $m_auth = oci_parse($conn, $m_sql);

                oci_bind_by_name($m_auth, ':employee_user_name', $EMPLOYEE_USER_NAME );

                oci_execute($m_auth);

                if (oci_fetch($m_auth))
                {
						$_SESSION["S_EMPLOYEE_USER_NAME"]	= oci_result($m_auth, "EMPLOYEE_USER_NAME");
						
     


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
				header ("Location: test.php");
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
	$error = "<font color=red>System error. Please contact support.</font>";
	}
}
                else
                {
                        $error = "<font color=red>Invalid Login/Password for $EMPLOYEE_USER_NAME.  Please Try again.</font>";

			//-------------------------------//
                        // Log login credentials to a    //
                        // file in the "/tmp" directory. //
                        //-------------------------------//
                        $f = new File();

                        $f->setFileName( $logFile );
                        if( !$f->writeLogFile( "Director Portal: Invalid Login/Password for $EMPLOYEE_USER_NAME." ) ){
                           $error .= '<font color=red>' . $f->getError() . '</font><br/>';
                        }


                }
        }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Novantas Portal: Dashboard</title>
<link rel="stylesheet" href="css/calendar.css">

<script src="ssi/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="ssi/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="css/console.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/columns.css" media="screen" type="text/css" />
<!--[if IE]>
    <style type="text/css">
        div.scroll {
            position: relative;
            height: 31em;
            width: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
            border: solid #D8D8D8;
            border-width: 1px 0px 1px 0px;
        }
        table {
            border-width: 1px 1px 0px 0px;
        }
        thead tr {
        width:100%;
            position: absolute;
            top: expression(this.offsetParent.scrollTop);
        }
        tbody {
            height: auto;
        }
        table tbody tr:first-child td {
            padding: 29px 4px 4px 4px;
        }
    </style>
<![endif]--> 
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}



function initForm(){
   var form = document.forms['testform'];
   form.elements['EMPLOYEE_USER_NAME'].focus();
}
//-->
</script>

</head>

<body onload="initForm();">
	<div class="maincontainer">


 <div class="main_box">
 
 <div class="loginbox">
 
 <h1>Log In</h1>
 <?php
        if ( $error )
                echo "$error<br>";
				

				?>
     
 <form enctype='multipart/form-data' action='index.php' method='POST' name="testform">
 
<fieldset >
	<table cellpadding="0" cellspacing="0" border="0" class="form">
    	<tr>
        	<td style="padding-left:0;"><label style="padding-left:0px;">Username:</label></td>
            <td><input class='login' type='text' name='EMPLOYEE_USER_NAME' maxlength='20' value='' size="20" tabindex='1'></td>
         </tr>
         <tr>
         	<td style="padding-left:0;"><label style="padding-left:0px;">Password:</label></td>
            <td><input class='login' type='password' name='EMPLOYEE_PASSWORD' maxlength='20' value='' size="20" tabindex='2'></td>
         </tr>
       	<tr>
        	<td>&nbsp;</td>
            <td><input class='submitSuspect' type='submit'  name='ok' value='Submit' title='' tabindex='3'></td>
         </tr>
    </table>
    
</fieldset>

</form>
</div>

	
        </div>
   
	
        </div>

<?php

echo $result;

?>

</body>
</html>
