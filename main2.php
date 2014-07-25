<?

ini_set('display_errors', 'On');
error_reporting(E_ALL);
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

		<!-- basic styles -->
<script src="assets/js/bootstrap.min.js"></script>
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
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
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
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
		<script src="assets/js/ace-extra.min.js"></script>
<script src="assets/js/bootstrap-tag.min.js"></script>
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>

           
		<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>

		
		
		
		


<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#top-table').dataTable();
			});
		</script>
		
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
							<a href="typography.html">
								<i class="icon-text-width"></i>
								<span class="menu-text"> Typography </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> UI Elements </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="elements.html">
										<i class="icon-double-angle-right"></i>
										Elements
									</a>
								</li>

								<li>
									<a href="buttons.html">
										<i class="icon-double-angle-right"></i>
										Buttons &amp; Icons
									</a>
								</li>

								<li>
									<a href="treeview.html">
										<i class="icon-double-angle-right"></i>
										Treeview
									</a>
								</li>

								<li>
									<a href="jquery-ui.html">
										<i class="icon-double-angle-right"></i>
										jQuery UI
									</a>
								</li>

								<li>
									<a href="nestable-list.html">
										<i class="icon-double-angle-right"></i>
										Nestable Lists
									</a>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										Three Level Menu
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="#">
												<i class="icon-leaf"></i>
												Item #1
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												4th level
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														Add Product
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														View Products
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> Tables </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="tables.html">
										<i class="icon-double-angle-right"></i>
										Simple &amp; Dynamic
									</a>
								</li>

								<li>
									<a href="jqgrid.html">
										<i class="icon-double-angle-right"></i>
										jqGrid plugin
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> Forms </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="form-elements.html">
										<i class="icon-double-angle-right"></i>
										Form Elements
									</a>
								</li>

								<li>
									<a href="form-wizard.html">
										<i class="icon-double-angle-right"></i>
										Wizard &amp; Validation
									</a>
								</li>

								<li>
									<a href="wysiwyg.html">
										<i class="icon-double-angle-right"></i>
										Wysiwyg &amp; Markdown
									</a>
								</li>

								<li>
									<a href="dropzone.html">
										<i class="icon-double-angle-right"></i>
										Dropzone File Upload
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="widgets.html">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> Widgets </span>
							</a>
						</li>

						<li>
							<a href="calendar.html">
								<i class="icon-calendar"></i>

								<span class="menu-text">
									Calendar
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
							</a>
						</li>

						<li>
							<a href="gallery.html">
								<i class="icon-picture"></i>
								<span class="menu-text"> Gallery </span>
							</a>
						</li>

						<li class="active open">
							<a href="#" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> More Pages </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="profile.html">
										<i class="icon-double-angle-right"></i>
										User Profile
									</a>
								</li>

								<li class="active">
									<a href="inbox.html">
										<i class="icon-double-angle-right"></i>
										Inbox
									</a>
								</li>

								<li>
									<a href="pricing.html">
										<i class="icon-double-angle-right"></i>
										Pricing Tables
									</a>
								</li>

								<li>
									<a href="invoice.html">
										<i class="icon-double-angle-right"></i>
										Invoice
									</a>
								</li>

								<li>
									<a href="timeline.html">
										<i class="icon-double-angle-right"></i>
										Timeline
									</a>
								</li>

								<li>
									<a href="login.html">
										<i class="icon-double-angle-right"></i>
										Login &amp; Register
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									Other Pages
									<span class="badge badge-primary ">5</span>
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="faq.html">
										<i class="icon-double-angle-right"></i>
										FAQ
									</a>
								</li>

								<li>
									<a href="error-404.html">
										<i class="icon-double-angle-right"></i>
										Error 404
									</a>
								</li>

								<li>
									<a href="error-500.html">
										<i class="icon-double-angle-right"></i>
										Error 500
									</a>
								</li>

								<li>
									<a href="grid.html">
										<i class="icon-double-angle-right"></i>
										Grid
									</a>
								</li>

								<li>
									<a href="blank.html">
										<i class="icon-double-angle-right"></i>
										Blank Page
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

 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 10; 

echo "<form>";
echo "Owner: <select name='OWNER' VALUE='OWNER' onChange=\"document.location='main2.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&STATUS=$STATUS&CONTROL_ID=$CONTROL_ID&OWNER='+this.options[this.selectedIndex].value;\">";
owner_drop_down($_GET['OWNER']);
echo "</select>";


echo "Status: <select name='OWNER' VALUE='OWNER' onChange=\"document.location='main2.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&CONTROL_ID=$CONTROL_ID&STATUS='+this.options[this.selectedIndex].value;\">";
status_drop_down($_GET['STATUS']);
echo "</select>";

echo "</form>";









$m_sql = "select cc.CONTROL_ID,cc.STATUS,cc.OWNER,cc.FILE_NAME,CC.LINE_CNT,CC.BYTE_CNT,CC.CREATE_DT,cc.FILE_CKSUM,ca.file_type as txn,
CC.ORG_FILE_NAME,cc.FILE_DIR,CC.INT_EXT_FLG,cc.PID,cc.PRIORITY,cc.OSTIMESTAMP,cc.FINAL_TBL_NAME,cc.CNSL_FILE_MV_LU_ID,CC.LAST_JOB_NAME,
CA.DELIMITER,CA.NO_TOKENS,CA.MINLENGTH,CA.MAXLENGTH,CA.HEAD_DATA,ca.TAIL_DATA from CNSL_FILE_CONTROL CC left join CNSL_FILE_ATTRIBUTE 
ca on cc.control_id = ca.control_id  where cc.OWNER like '$owner' and cc.status like '$status' and cc.CREATE_DT between '$start_date' and '$end_date'";
            $doc = ociparse($conn, $m_sql);
                ociexecute($doc);
				
                //$nrows = oci_fetch_all($doc,$res);
                             oci_fetch_all($doc, $res, 0, 100, OCI_FETCHSTATEMENT_BY_ROW);

 				
            echo "<div style='height:350px;'><table id='top-table' class='dataTable'><thead><tr>";
			
			/* if ($_GET['THE_ORDER'] == "ASC"){
			echo "<th class='top-header-cell col1'><button name='CONTROL_ID' value='CONTROL_ID' onClick=\"document.location='main2.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&STATUS=$STATUS&ORDER_BY=CONTROL_ID&THE_ORDER=DESC;\"</th>";
			}
			else{ */
			
			echo "<th class='top-header-cell col1'>CONTROL_ID</th>
			<th class='top-header-cell col2'>STATUS</th>
			<th class='top-header-cell col3'>OWNER</th>
			<th class='top-header-cell col4'>FILE_NAME</th>
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
echo "    <td class='top-body-cell col" . $i . "'><div><a href='main2.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&STATUS=$STATUS&CONTROL_ID=" . $res[$cnum]['CONTROL_ID'] . "'>". $item . "</a></div></td>\n";
				$i++;
				}
				$cnum++;
           echo "</tr>\n";       
        }
		
	echo "</tbody></table>\n";	
	
	 echo "<table border ='1'><tr><td>";
	 $c_sql = "SELECT COUNT(*) from CNSL_FILE_CONTROL where OWNER like '$owner' and CREATE_DT between '$start_date' and '$end_date'";
             $doc = ociparse($conn, $c_sql);
                 ociexecute($doc);
				 oci_fetch($doc);
				$numrows=ociresult($doc,"COUNT(*)");
		   


 $total_pages = ceil($numrows / 100);


 for ($i=1; $i<$total_pages; $i++) {
echo "<a href='main2.php?OWNER=$OWNER&STATUS=$STATUS&START_DATE=$START_DATE&END_DATE=$END_DATE&CONTROL_ID=$CONTROL_ID&page=". $i . "'>". $i*100 ."</a> "; 
};


echo "</td></tr></table>";	
	
	

	
//being log section	
	
	/* if ($_GET['CONTROL_ID']==""){
	$control_id=$res[0]['CONTROL_ID'];
	} */
	
$l_sql = "SELECT c.control_id, m.log_dt, m.message, c.last_job_name, m.msg_no FROM cnsl_file_control c, cnsl_mainlog m WHERE c.control_id = m.control_id and c.control_id='$control_id'";
            $doc2 = ociparse($conn, $l_sql);
                ociexecute($doc2);
                //$nrows = oci_fetch_all($doc,$res);
                             $lognumrows=oci_fetch_all($doc2, $res2, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

 				if (empty($lognumrows))
			{echo "<font color='red'>No Log data for " . $_GET['CONTROL_ID'];}
			else{
            echo "<div style='height:350px;'><table id='log-table' class='dataTable'><thead><tr>";

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
		
	echo "</tbody></table>\n";		
	}
	
	
	
	
	
	
	
	
	
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
