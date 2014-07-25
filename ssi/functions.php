<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

date_default_timezone_set('America/New_York');


	function owner_drop_down($OWNER)
	{
	$m_sql = "select distinct owner from CNSL_FILE_CONTROL order by owner ASC";
	    global $conn;
	    $doc = oci_parse($conn, $m_sql);
    	    oci_execute($doc);
	    echo "<option value='%'>ALL</option>";
    	    while ( oci_fetch($doc) )
    	    {
                 if ( ociresult($doc, 'OWNER') == $OWNER ){
                	echo "<option selected value='".ociresult($doc, 'OWNER')."' >".ociresult($doc, 'OWNER')."</option>\n";
}
        	else{
                	echo "<option value='".ociresult($doc, 'OWNER')."' >".ociresult($doc, 'OWNER')."</option>\n";
                     }
					 
    	    }
			}
			
			
			
	function status_drop_down($STATUS)
	{
	$m_sql = "select distinct status_code, short_status from CNSL_STATUS_CODES order by short_status ASC";
	    global $conn;
	    $doc = oci_parse($conn, $m_sql);
    	    oci_execute($doc);
	    echo "<option value='%'>ALL</option>";
    	    while ( oci_fetch($doc) )
    	    {
                 if ( ociresult($doc, 'STATUS_CODE') == $STATUS ){
                	echo "<option selected value='".ociresult($doc, 'STATUS_CODE')."' >".ociresult($doc, 'SHORT_STATUS')."</option>\n";
}
        	else{
                	echo "<option value='".ociresult($doc, 'STATUS_CODE')."' >".ociresult($doc, 'SHORT_STATUS')."</option>\n";
                     }			
    	    }
						
			
			
			}			
			
			
		
			
		function status_codes($control_id,$status_change)
		{
		
		
		$m_sql = "select distinct status_code, short_status from CNSL_STATUS_CODES order by short_status ASC";
		global $conn;
		$doc = oci_parse($conn, $m_sql);
    	    oci_execute($doc);
			echo $status_change;
		//echo "<option value=''>" . $status_change . "</option>";
    	    while ( oci_fetch($doc) )
    	    {
                 if ( ociresult($doc, 'STATUS_CODE') == $status_change ){
                	echo "<option selected value='".ociresult($doc, 'STATUS_CODE')."' >".ociresult($doc, 'SHORT_STATUS')."</option>\n";
                   }
        	else{
                	echo "<option value='".ociresult($doc, 'STATUS_CODE')."' >".ociresult($doc, 'SHORT_STATUS')."</option>\n";
                     }
					 
    	    }
			
			
			
		}
			//submits status change and assigns a color
			function submit_status_change($control_id,$new_status)
			{
			$alt_sql = "update cnsl_file_control set STATUS = '$new_status' where CONTROL_ID='$control_id'";
		    global $conn;
			$doc2 = oci_parse($conn, $alt_sql);
			oci_execute($doc2);
			}
			
			
			function status_color($item)
			{
			
			
			switch ($item) {
			case "Complete":
				return "#2AED11";
				break;
			case "Decrypted":
				return "#EDD411";
				break;
			case "DecryptErr":
				return "#E81A1A";
				break;
		    case "Downloaded":
				return "#11C8ED";
				break;
			case "DownloadErr":
				return "#E81A1A";
				break;
			case "FtpError":
				return "#E81A1A";
				break;
			case "HoldNotUsed":
				return "#11C8ED";
				break;
			case "Imported":
				return "#2AED11";
				break;
			case "LoadErr":
				return "#E81A1A";
				break;
		    case "LoadReady":
				return "#EDD411";
				break;
			case "Misplaced":
				return "#E81A1A";
				break;
			case "multiLoadFail":
				return "#E81A1A";
				break;
			case "Processing":
				return "#EDD411";
				break;
			case "Received":
				return "#EDD411";
				break;
			case "Duplicate":
				return "#F21DEC";
				break;
		    default:
				return "white";
			
		}
			
		}
		
//converts status code to plain text format
		
function status_number_to_char($status)
{
    $m_sql= "select short_status from cnsl_status_codes where STATUS_CODE = '$status'";			
			    global $conn;
			$doc = oci_parse($conn, $m_sql);
			oci_execute($doc);
			oci_fetch_all($doc,$res,0,1);
			foreach ($res as $col) {
    foreach ($col as $item) {
	       return $item;
		   }
		   }
			}
		
		//gets the current status of the control id
	function get_current_status($control_id)
{
	$m_sql = "select status from cnsl_file_control where CONTROL_ID = '$control_id'";
		    global $conn;
			$doc = oci_parse($conn, $m_sql);
			oci_execute($doc);
			oci_fetch_all($doc,$res,0,1);
			foreach ($res as $col) {
    foreach ($col as $item) {
	       return $item;
		   }
		   }
		
			}
		
		//logs status change to gui_status_change
		function log_status_change($control_id,$old_status,$new_status,$user_name)	
		{
		$m_sql ="insert into gui_status_change (control_id,old_status,new_status,changed_dt,changed_by) VALUES ('$control_id','$old_status','$new_status',SYSDATE,'$user_name')";
		global $conn;
        $doc_in = oci_parse($conn, $m_sql);
		oci_execute($doc_in);
		}
	?>