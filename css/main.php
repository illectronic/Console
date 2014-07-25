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

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/console.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
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

		<script src="assets/js/ace-extra.min.js"></script>
<script type="text/javascript" src="js/jquery-latest.js"></script> 
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
 <script type="text/javascript">
$('#top-table').tablesorter({
    // *** Appearance ***
    // fix the column widths
    widthFixed : true,
    // include zebra and any other widgets, options:
    // 'uitheme', 'filter', 'stickyHeaders' & 'resizable'
    // the 'columns' widget will require custom css for the
    // primary, secondary and tertiary columns
    widgets    : [ 'uitheme', 'zebra' ],
    // other options: "ddmmyyyy" & "yyyymmdd"
    dateFormat : "mmddyyyy",

    // *** Functionality ***
    // starting sort direction "asc" or "desc"
    sortInitialOrder : "asc",
    // These are detected by default,
    // but you can change or disable them
    headers : {
        // set "sorter : false" (no quotes) to disable the column
        0: { sorter: "text" },
        1: { sorter: "digit" },
        2: { sorter: "text" },
        3: { sorter: "url" }
    },
    // extract text from the table - this is how is
    // it done by default
    textExtraction : {
        0: function(node) { return $(node).text(); },
        1: function(node) { return $(node).text(); }
    },
    // forces the user to have this/these column(s) sorted first
    sortForce : null,
    // initial sort order of the columns
    // [[columnIndex, sortDirection], ... ]
    sortList : [],
    // default sort that is added to the end of the users sort
    // selection.
    sortAppend : null,
    // Use built-in javascript sort - may be faster, but does not
    // sort alphanumerically
    sortLocaleCompare : false,
    // Setting this option to true will allow you to click on the
    // table header a third time to reset the sort direction.
    sortReset: false,
    // Setting this option to true will start the sort with the
    // sortInitialOrder when clicking on a previously unsorted column.
    sortRestart: false,
    // The key used to select more than one column for multi-column
    // sorting.
    sortMultiSortKey : "shiftKey",

    // *** Customize header ***
    onRenderHeader  : function() {
        // the span wrapper is added by default
        $(this).find('span').addClass('headerSpan');
    },
    // jQuery selectors used to find the header cells.
    selectorHeaders : 'thead th',

    // *** css classes to use ***
    cssAsc        : "headerSortUp",
    cssChildRow   : "expand-child",
    cssDesc       : "headerSortDown",
    cssHeader     : "header",
    tableClass    : 'tablesorter',

    // *** widget css class settings ***
    // column classes applied, and defined in the skin
    widgetColumns : { css: ["primary", "secondary", "tertiary"] },
    // find these jQuery UI class names by hovering over the
    // Framework icons on this page:
    // http://jqueryui.com/themeroller/
    widgetUitheme : { css: [
        "ui-icon-arrowthick-2-n-s", // Unsorted icon
        "ui-icon-arrowthick-1-s",   // Sort up (down arrow)
        "ui-icon-arrowthick-1-n"    // Sort down (up arrow)
        ]
    },
    // pick rows colors to match ui theme
    widgetZebra: { css: ["ui-widget-content", "ui-state-default"] },

    // *** prevent text selection in header ***
    cancelSelection : true,

    // *** send messages to console ***
    debug : false
});
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
							<a href="main.html">
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

 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 20; 

echo "<form>";
echo "Owner: <select name='OWNER' VALUE='OWNER' onChange=\"document.location='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&STATUS=$STATUS&OWNER='+this.options[this.selectedIndex].value;\">";
owner_drop_down($_GET['OWNER']);
echo "</select>";


echo "Status: <select name='OWNER' VALUE='OWNER' onChange=\"document.location='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&STATUS='+this.options[this.selectedIndex].value;\">";
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
                             oci_fetch_all($doc, $res, $start_from, 20, OCI_FETCHSTATEMENT_BY_ROW);
?>
 				
            <table id='top-table' class='tablesorter'><thead><tr>
			<th class='top-header-cell col1'>CONTROL_ID</th>
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
            </tr></thead><tbody id='scroll_me'>
<?php
foreach ($res as $col) {
		echo "<tr>\n";
		$i=1;
    foreach ($col as $item) {
echo "    <td class='top-body-cell col" . $i . "'><div>". $item . "</div></td>\n";
				$i++;
				}
           echo "</tr>\n";       
        }
		
	echo "</tbody></table>\n";	




	
 echo "<table border ='1'><tr><td>";
	 $c_sql = "SELECT COUNT(*) from CNSL_FILE_CONTROL where OWNER like '$owner' and CREATE_DT between '$start_date' and '$end_date'";
             $doc = ociparse($conn, $c_sql);
                 ociexecute($doc);
				 oci_fetch($doc);
				$numrows=ociresult($doc,"COUNT(*)");
		   


 $total_pages = ceil($numrows / 20);


 for ($i=1; $i<$total_pages; $i++) { 
echo "<a href='main.php?OWNER=$OWNER&STATUS=$STATUS&START_DATE=$START_DATE&END_DATE=$END_DATE&page=". $i."'>".$i."</a> "; 
};

 
echo "</td></tr></table>";	
 
 echo $m_sql;
 
oci_free_statement($doc);
oci_close($conn);
?>


				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
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
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/bootstrap-tag.min.js"></script>
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>


	</body>
</html>
