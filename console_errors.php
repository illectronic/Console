<?

/* ini_set('display_errors', 'On');
error_reporting(E_ALL); */
        // include the common header
 	    include ("ssi/db_con.php");
		include("ssi/session.php");
		include("ssi/functions.php");
		$END_DATE=Date("m-d-Y");
			$START_DATE= date('m-d-Y', strtotime('-3 months'));
              
			$_GET['START_DATE']=$START_DATE;
			 $_GET['END_DATE']=$END_DATE;
		?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Novantas Console - Errors</title>

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
		

		

  
  

  
<script type="text/javascript">
		
	


$(document).ready(function() {
    var oTable = $('#error-table').dataTable( {
        "sScrollY": 550,
        "sScrollX": "100%",
		"iDisplayLength": 250,
		"aaSorting": [[ 3, "desc" ]],
		"bScrollCollapse": true,
		"bPaginate": false,
		"aoColumnDefs": [
      { "sWidth": "30%", "aTargets": [ 2 ] }
    ]
		});
} );



$(document).ready( function () {
	
	var oTable = $('#error-table').dataTable();
	new FixedHeader( oTable, { "bottom": true } );
	
	/* Copy the widths across - apparently a clone isn't good enough for this */
        jQuery("tfoot:eq(0)&gt;tr th", s.nTable).each(function(i) {
            jQuery("tfoot:eq(0)&gt;tr th:eq(" + i + ")", nTable).width(jQuery(this).width() + (jQuery.browser == 'mozilla' ? 0 : 1));
        });

        jQuery("tfoot:eq(0)&gt;tr td", s.nTable).each(function(i) {
            jQuery("tfoot:eq(0)&gt;tr th:eq(" + i + ")", nTable)[0].style.width(jQuery(this).width() + (jQuery.browser == 'mozilla' ? 0 : 1));
        });
	
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
							<a href="#" onClick="document.location='main.php?OWNER=%&STATUS=%&START_DATE=<?php echo $START_DATE ?>&END_DATE=<?php echo $END_DATE?>&CONTROL_ID=&NEW_STATUS=&CHANGE_CONTROL=NO'">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

					

						<li>
							<a href="#">
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
							<li class="active">Console Errors</li>
						</ul><!-- .breadcrumb -->


					</div>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

<?php 






	
	
	
//begin error section


$e_sql = "SELECT c.last_job_name, c.control_id, m.message, to_char(c.create_dt,'DD-MON-YYYY HH24:MI:SS') FROM cnsl_file_control c, cnsl_mainlog m WHERE c.control_id = m.control_id AND c.status IN (72,73,76,19,99,13,131,132,133,281,201)";
            $doc3 = ociparse($conn, $e_sql);
                ociexecute($doc3);
                //$nrows = oci_fetch_all($doc,$res);
                             oci_fetch_all($doc3, $res3, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
							 
echo "<div style='height:350px;margin-top:20px;'><table id='error-table' class='dataTable'><thead><tr>";

			echo "<th class='top-header-cell col1' width='10%'>Last Job Name</th>
			<th class='log-header-cell col2' width='10%'>Control ID</th>
			<th class='log-header-cell col2' width='30%'>Message</th>
			<th class='log-header-cell col3' width='46%'>Create Date</th>
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
		
	echo "</tbody></table></div>\n";		
	
	
	
	
	
	
	
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
