<?

/* ini_set('display_errors', 'On');
error_reporting(E_ALL); */
        // include the common header
 	    include ("ssi/db_con.php");
		include("ssi/session.php");
		include("ssi/functions.php");
		
		
		
		?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Novantas Console - Main</title>

		<meta name="description" content="Mailbox with some customizations as described in docs" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles 
<script src="assets/js/bootstrap.min.js"></script>
-->
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/console.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jq.css" type="text/css" media="screen" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
<script src="js/jquery-latest.js"></script>
		<script src="assets/js/ace-extra.min.js"></script>
<script src="assets/js/bootstrap-tag.min.js"></script>
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>
	
<link rel="stylesheet" href="css/jquery-ui.css" />
 <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
	
			<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="jsColReorderWithResize.js"></script>
		
<script>
	function clearForm() {
    
setTimeout('window.location.href = "main.php?OWNER=%&STATUS=%&START_DATE=<?php echo $START_DATE ?>&END_DATE=<?php echo $END_DATE ?>&CONTROL_ID=&NEW_STATUS=&CHANGE_CONTROL=NO"',10000);
}	

</script>
  <script>
  $(function() {
    $( "#datepickerstart" ).datepicker();
  });
  
  
  
    $(function() {
    $( "#datepickerend" ).datepicker();
  });
  

  
  
  
  </script>

  
  

  
		<script type="text/javascript">
		
		$(window).load( function () {
  $('#top-table').dataTable().fnAdjustColumnSizing( false );
} );

	$('.DataTables_sort_icon').remove();
		
 $(document).ready(function() {
    $('#top-table').dataTable( {
        "sScrollY": 250,
        "sScrollX": "100%",
		"iDisplayLength": 50,
		 <!--  "sScrollXInner": "150%", -->
		"bScrollCollapse": true,
		bAutoWidth: false,
		"bPaginate": false,
            "aaSorting": [ [0,'desc'] ],
			"bSortClasses": false,
			"aoColumnDefs": [
      { "sWidth": "10%", "aTargets": [ 3 ] }
    ]
    } );
} ); 







$(document).ready(function() {
    $('#log-table').dataTable( {
        "sScrollY": 250,
        "sScrollX": "100%",
		"iDisplayLength": 100,
		"bPaginate": false,
		"aaSorting": [[ 1, "desc" ]],
		"aoColumnDefs": [
      { "sWidth": "10%", "aTargets": [ 3 ] }
    ]
    } );
} );


/* Copy the widths across - apparently a clone isn't good enough for this */
        jQuery("tfoot:eq(0)>tr th", s.nTable).each(function(i) {
            jQuery("tfoot:eq(0)>tr th:eq(" + i + ")", nTable).width(jQuery(this).width() + (jQuery.browser == 'mozilla' ? 0 : 1));
        });
 
        jQuery("tfoot:eq(0)>tr td", s.nTable).each(function(i) {
            jQuery("tfoot:eq(0)>tr th:eq(" + i + ")", nTable)[0].style.width(jQuery(this).width() + (jQuery.browser == 'mozilla' ? 0 : 1));
        });




$(document).ready( function () {
	var oTable = $('#top-table').dataTable();
	new FixedHeader( oTable, { "bottom": true } 
	);
	
	var oTable2 = $('#log-table').dataTable();
	new FixedHeader( oTable2, { "bottom": true } );

	
	/* Copy the widths across - apparently a clone isn't good enough for this */
        jQuery("tfoot:eq(0)&gt;tr th", s.nTable).each(function(i) {
            jQuery("tfoot:eq(0)&gt;tr th:eq(" + i + ")", nTable).width(jQuery(this).width() + (jQuery.browser == 'mozilla' ? 0 : 1));
        });

        jQuery("tfoot:eq(0)&gt;tr td", s.nTable).each(function(i) {
            jQuery("tfoot:eq(0)&gt;tr th:eq(" + i + ")", nTable)[0].style.width(jQuery(this).width() + (jQuery.browser == 'mozilla' ? 0 : 1));
        });
	
} );


$(window).resize( function () {
  $('#top-table').dataTable().fnAdjustColumnSizing( false );
} );





</script>

	
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	
	
	
	
	
	
	
	
	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							Novantas Console
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
<div align="right"><a href="logout.php" style="color:#ffffff";>Logout</a></div>
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar menu-min" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li>
							<a href="#">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

					

						<li>
							<a href="console_errors.php">
								<i class="icon-desktop"></i>
								<span class="menu-text"> Console Errors</span>

								<b class="arrow icon-angle-down"></b>
							</a>

						
						</li>

			
							</ul>
						</li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Console Main</li>
						</ul><!-- .breadcrumb -->


					</div>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

<?php 

$owner=$_GET['OWNER'];
$start_date=$_GET['START_DATE'];
$end_date=$_GET['END_DATE'];
$status=$_GET['STATUS'];
$control_id= $_GET['CONTROL_ID'];
$start=$_GET['START'];
 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 10; 

echo "<div><form style='margin-bottom:15px;width:100%;'>";
echo "Owner:<select name='OWNER' VALUE='OWNER' style='margin-right:10px;' onChange=\"document.location='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&STATUS=$STATUS&CHANGE_CONTROL=NO&CONTROL_ID=$CONTROL_ID&NEW_STATUS=$STATUS&OWNER='+this.options[this.selectedIndex].value;\">";
owner_drop_down($_GET['OWNER']);
echo "</select>";


echo "Status: <select name='OWNER' VALUE='OWNER' style='margin-right:10px;' onChange=\"document.location='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&CONTROL_ID=$CONTROL_ID&CHANGE_CONTROL=NO&NEW_STATUS=$STATUS&STATUS='+this.options[this.selectedIndex].value;\">";
status_drop_down($_GET['STATUS']);
echo "</label></select>";
echo "Start date: <input type='text' style='margin-right:5px; size='10' id='datepickerstart' value='". $_GET['START_DATE'] ."'>";
echo "End Date: <input type='text' size='10' id='datepickerend' value='" . $_GET['END_DATE'] . "'>";
echo "<input type='button' id='submitdate' name='test' value='Submit' style='margin-right:10px;' onClick=\"document.location='main.php?page=$page&OWNER=$OWNER&CONTROL_ID=$CONTROL_ID&CHANGE_CONTROL=NO&STATUS=$STATUS&NEW_STATUS=$STATUS&START_DATE='+document.getElementById('datepickerstart').value+'&END_DATE='+document.getElementById('datepickerend').value;\">";
if ($_GET['CONTROL_ID'] != "%" || empty($_GET['CONTROL_ID'])){
echo "Change Status: <input type='text' size='9' id='change_status' value='" . $_GET['CONTROL_ID'] . "'>";
echo "<select name='NEWSTATUS' VALUE='NEWSTATUS' onChange=\"document.location='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&CONTROL_ID=$CONTROL_ID&STATUS=$STATUS&CHANGE_CONTROL=NO&NEW_STATUS='+this.options[this.selectedIndex].value;\">";
status_codes($_GET['CONTROL_ID'],$_GET['NEW_STATUS']);
echo "</select>";
echo "<input type='button' id='submitcontrol' name='submitcontrol' value='Submit' style='margin-right:10px;' onClick=\"document.location='main.php?page=$page&OWNER=$OWNER&CONTROL_ID=$CONTROL_ID&STATUS=$STATUS&START_DATE=$START_DATE&END_DATE=$END_DATE&NEW_STATUS=$NEW_STATUS&CHANGE_CONTROL=YES'\">";
}

if ($_GET['CHANGE_CONTROL'] == "YES")
{
$old_status=get_current_status($_GET['CONTROL_ID']);
log_status_change($_GET['CONTROL_ID'],status_number_to_char($old_status),status_number_to_char($_GET['NEW_STATUS']),$_SESSION['S_EMPLOYEE_USER_NAME']);
submit_status_change($_GET['CONTROL_ID'],$_GET['NEW_STATUS']);


echo $_GET['CONTROL_ID'] . " changed to " . status_number_to_char($_GET['NEW_STATUS']) . " -  Restarting interface in 10 seconds";
echo "<script language='javascript'>clearForm();</script>";
}
echo "<div style='float:right;'><input type='button' id='refresh' name='refresh' value='Refresh' onClick=\"location.reload();\"></div></div>";
echo "</form>";






$m_sql = "select cc.CONTROL_ID,CS.SHORT_STATUS,cc.OWNER,cc.FILE_NAME,CC.LINE_CNT,CC.BYTE_CNT,CC.CREATE_DT,cc.FILE_CKSUM,ca.file_type as txn,
CC.ORG_FILE_NAME,cc.FILE_DIR,CC.INT_EXT_FLG,cc.PID,cc.PRIORITY,cc.OSTIMESTAMP,cc.FINAL_TBL_NAME,cc.CNSL_FILE_MV_LU_ID,CC.LAST_JOB_NAME,
CA.DELIMITER,CA.NO_TOKENS,CA.MINLENGTH,CA.MAXLENGTH,CA.HEAD_DATA,CA.TAIL_DATA 
from CNSL_FILE_CONTROL CC 
left join CNSL_FILE_ATTRIBUTE CA on CC.CONTROL_ID = CA.CONTROL_ID  
left join CNSL_STATUS_CODES CS
on cc.status = CS.STATUS_CODE
where cc.OWNER like '$owner' and cc.status like '$status' and cc.CREATE_DT between to_date('$start_date','MM/DD/YYYY') and to_date('$end_date','MM/DD/YYYY')";

            $doc = ociparse($conn, $m_sql);
                ociexecute($doc);
				
                //$nrows = oci_fetch_all($doc,$res);
                             oci_fetch_all($doc, $res, $start,50, OCI_FETCHSTATEMENT_BY_ROW);

 				
            echo "<div style='height:350px;'><table id='top-table' class='dataTable' cellpadding='0' cellspacing='0' border='0'><thead><tr class='tablesorter-stickyHeader'>";
			
			/* if ($_GET['THE_ORDER'] == "ASC"){
			echo "<th class='top-header-cell col1'><button name='CONTROL_ID' value='CONTROL_ID' onClick=\"document.location='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&STATUS=$STATUS&ORDER_BY=CONTROL_ID&THE_ORDER=DESC;\"</th>";
			}
			else{ */
			
			echo "<th class='top-header-cell col1'>CONTROL_ID</th>
			<th class='top-header-cell col2'>STATUS</th>
			<th class='top-header-cell col3'>OWNER</th>
			<th class='top-header-cell col4' width='3%'>FILE_NAME</th>
			<th class='top-header-cell col5'>LINE_CNT</th>
			<th class='top-header-cell col6'>BYTE_CNT</th>
			<th class='top-header-cell col7'>CREATE_DT</th>
			<th class='top-header-cell col8'>CHKSUM</th>
			<th class='top-header-cell col9'>TXN</th>
			<th class='top-header-cell col10'>ORG FName</th>
			<th class='top-header-cell col11'>File Dir</th>
			<th class='top-header-cell col12'>INT_EXT_FLG</th>
			<th class='top-header-cell col13'>PID</th>
			<th class='top-header-cell col14'>PRIORITY</th>
			<th class='top-header-cell col15'>OSTIMESTAMP</th>
			<th class='top-header-cell col16'>FINAL_TBL_NAME</th>
			<th class='top-header-cell col17'>CNSL_FILE_MV_LU_ID</th>
			<th class='top-header-cell col18'>Last Name</th>
			<th class='top-header-cell col19'>Delimiter</th>
			<th class='top-header-cell col20'>NO_TOKENS</th>
			<th class='top-header-cell col21'>Min Length</th>
			<th class='top-header-cell col22'>Max Length</th>
			<th class='top-header-cell col23'>Head Data</th>
			<th class='top-header-cell col24'>Tail Data</th>
            </tr></thead><tbody style='height: 4em; overflow: scroll;'>";

		$cnum=0;
foreach ($res as $col) {
		echo "<tr>\n";
		$i=1;

    foreach ($col as $item) {
	if ($i==2){
	echo "    <td style='background-color:" . status_color($item) . ";' class='top-body-cell col" . $i . "'><div><a href='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&CHANGE_CONTROL=NO&OWNER=$OWNER&NEW_STATUS=$STATUS&STATUS=$STATUS&CONTROL_ID=" . $res[$cnum]['CONTROL_ID'] . "'>". $item . "</a></div></td>\n";

	}
	
	elseif ($i==4){
	echo "    <td class='top-body-cell col" . $i . "'><div><a href='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&CHANGE_CONTROL=NO&OWNER=$OWNER&NEW_STATUS=$STATUS&STATUS=$STATUS&CONTROL_ID=" . $res[$cnum]['CONTROL_ID'] ."' title='" . $item ."'>". $item . "</a></div></td>\n";

	}
	else{
	
echo "    <td class='top-body-cell col" . $i . "'><div><a href='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&CHANGE_CONTROL=NO&OWNER=$OWNER&NEW_STATUS=$STATUS&STATUS=$STATUS&CONTROL_ID=" . $res[$cnum]['CONTROL_ID'] . "'>". $item . "</a></div></td>\n";
}
				$i++;
				}
				$cnum++;
		
           echo "</tr>\n";       
        }
		
	echo "</tbody></table>\n";	
	
	 echo "<table border ='1'><tr><td>";
	 $c_sql = "SELECT COUNT(*) from CNSL_FILE_CONTROL where OWNER like '$owner' and CREATE_DT between to_date('$start_date','MM/DD/YYYY') and to_date('$end_date','MM/DD/YYYY')";
             $doc = ociparse($conn, $c_sql);
                 ociexecute($doc);
				 oci_fetch($doc);
				$numrows=ociresult($doc,"COUNT(*)");
		   


 $total_pages = ceil($numrows / 50);


 for ($i=1; $i<$total_pages; $i++) {
echo "<a href='main.php?OWNER=$OWNER&STATUS=$STATUS&START_DATE=$START_DATE&END_DATE=$END_DATE&CHANGE_CONTROL=NO&NEW_STATUS=$STATUS&CONTROL_ID=$CONTROL_ID&START=". $i . "'>". $i*50 ."</a> "; 
};


echo "</td></tr></table>";	
	
	

	
//being log section	
	
	/* if ($_GET['CONTROL_ID']==""){
	$control_id=$res[0]['CONTROL_ID'];
	} */
	
$l_sql = "SELECT c.control_id, to_char(m.log_dt,'DD-MON-YYYY HH24:MI:SS'), m.message, c.last_job_name, m.msg_no FROM cnsl_file_control c, cnsl_mainlog m WHERE c.control_id = m.control_id and c.control_id='$control_id'";
            $doc2 = ociparse($conn, $l_sql);
                ociexecute($doc2);
                //$nrows = oci_fetch_all($doc,$res);
                             $lognumrows=oci_fetch_all($doc2, $res2, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

 				if (empty($lognumrows))
			{echo "<font color='red'>No Log data for " . $_GET['CONTROL_ID'] . "</font>";}
			else{
            echo "<div style='height:350px;margin-top:20px;'><table id='log-table' class='dataTable'><thead><tr>";

			echo "<th class='top-header-cell col1'>CONTROL_ID</th>
			<th class='log-header-cell col2'>LOG Date</th>
			<th class='log-header-cell col3'>Message</th>
			<th class='log-header-cell col4'>Source</th>
			<th class='log-header-cell col5'>MSG_NO</th>
            </tr></thead><tbody style='height: 4em; overflow: scroll;'>";

			
			
foreach ($res2 as $col) {
		echo "<tr>\n";
		$k=1;

    foreach ($col as $item) {
echo "    <td class='log-body-cell col" . $k . "'><div>". $item . "</div></td>\n";
				$k++;
				}
           echo "</tr>\n";       
        }
		
	echo "</tbody></table></div>\n";		
	}
	
	
	
/* //begin error section


$e_sql = "SELECT c.last_job_name, m.message, to_char(c.create_dt,'DD-MON-YYYY HH24:MI:SS') FROM cnsl_file_control c, cnsl_mainlog m WHERE c.control_id = m.control_id AND c.status IN (72,73,76,19,99,13,131,132,133,281,201)";
            $doc3 = ociparse($conn, $e_sql);
                ociexecute($doc3);
                //$nrows = oci_fetch_all($doc,$res);
                             oci_fetch_all($doc3, $res3, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
							 
echo "<div style='height:350px;margin-top:20px;'><table id='error-table' class='dataTable'><thead><tr>";

			echo "<th class='top-header-cell col1'>Last Job Name</th>
			<th class='log-header-cell col2'>Message</th>
			<th class='log-header-cell col3'>Create Date</th>
            </tr></thead><tbody style='height: 4em; overflow: scroll;'>";

			
			
foreach ($res3 as $col) {
		echo "<tr>\n";
		$m=1;

    foreach ($col as $item) {
echo "    <td class='error-body-cell col" . $m . "'><div>". $item . "</div></td>\n";
				$m++;
				}
           echo "</tr>\n";       
        }
		
	echo "</tbody></table></div>\n";	 */	
	
	
	
	
	
	
	
?>


<?php
	

 
 

?>


				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		


	</body>
</html>
