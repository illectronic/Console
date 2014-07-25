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
<script src="js/jquery-latest.js"></script>
		<script src="assets/js/ace-extra.min.js"></script>
<script src="assets/js/bootstrap-tag.min.js"></script>
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.widgets.js"></script>
		<script type="text/javascript" src="js/jquery.pager.js"></script>
 <script type="text/javascript">
$(function() {

  // call the tablesorter plugin
  $("table.tablesorter").tablesorter({
    theme: 'blue',

    // hidden filter input/selects will resize the columns, so try to minimize the change
    widthFixed : true,

    // initialize zebra striping and filter widgets
    widgets: ["zebra", "filter"],
	//sorts by page
    .tablesorterPager({container: $("#pager")}); 
    // headers: { 5: { sorter: false, filter: false } },

    widgetOptions : {

      // If there are child rows in the table (rows with class name from "cssChildRow" option)
      // and this option is true and a match is found anywhere in the child row, then it will make that row
      // visible; default is false
      filter_childRows : false,

      // if true, a filter will be added to the top of each table column;
      // disabled by using -> headers: { 1: { filter: false } } OR add class="filter-false"
      // if you set this to false, make sure you perform a search using the second method below
      filter_columnFilters : true,

      // css class applied to the table row containing the filters & the inputs within that row
      filter_cssFilter : 'tablesorter-filter',

      // class added to filtered rows (rows that are not showing); needed by pager plugin
      filter_filteredRow   : 'filtered',

      // add custom filter elements to the filter row
      // see the filter formatter demos for more specifics
      filter_formatter : null,

      // add custom filter functions using this option
      // see the filter widget custom demo for more specifics on how to use this option
      filter_functions : null,

      // if true, filters are collapsed initially, but can be revealed by hovering over the grey bar immediately
      // below the header row. Additionally, tabbing through the document will open the filter row when an input gets focus
      filter_hideFilters : false, // true, (see note in the options section above)

      // Set this option to false to make the searches case sensitive
      filter_ignoreCase : true,

      // if true, search column content while the user types (with a delay)
      filter_liveSearch : true,

      // jQuery selector string of an element used to reset the filters
      filter_reset : 'button.reset',

      // Delay in milliseconds before the filter widget starts searching; This option prevents searching for
      // every character while typing and should make searching large tables faster.
      filter_searchDelay : 300,

      // if true, server-side filtering should be performed because client-side filtering will be disabled, but
      // the ui and events will still be used.
      filter_serversideFiltering: false,

      // Set this option to true to use the filter to find text from the start of the column
      // So typing in "a" will find "albert" but not "frank", both have a's; default is false
      filter_startsWith : false,

      // Filter using parsed content for ALL columns
      // be careful on using this on date columns as the date is parsed and stored as time in seconds
      filter_useParsedData : false

    }

  });

  // External search
  // buttons set up like this:
  // <button type="button" class="search" data-filter-column="4" data-filter-text="2?%">Saved Search</button>
  $('button.search').click(function(){
    /*** first method *** data-filter-column="1" data-filter-text="!son"
      add search value to Discount column (zero based index) input */
    var filters = [],
      col = $(this).data('filter-column'), // zero-based index
      txt = $(this).data('filter-text'); // text to add to filter

    filters[col] = txt;
    // using "table.hasFilters" here to make sure we aren't targetting a sticky header
    $.tablesorter.setFilters( $('table.hasFilters'), filters, true ); // new v2.9

    /** old method (prior to tablsorter v2.9 ***
    var filters = $('table.tablesorter').find('input.tablesorter-filter');
    filters.val(''); // clear all filters
    filters.eq(col).val(txt).trigger('search', false);
    ******/

    /*** second method ***
      this method bypasses the filter inputs, so the "filter_columnFilters"
      option can be set to false (no column filters showing)
    ******/
    /*
    var columns = [];
    columns[5] = '2?%'; // or define the array this way [ '', '', '', '', '', '2?%' ]
    $('table').trigger('search', [ columns ]);
    */

    return false;
  });

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

 				
            echo "<table id='top-table' class='tablesorter'><thead><tr>";
			
			/* if ($_GET['THE_ORDER'] == "ASC"){
			echo "<th class='top-header-cell col1'><button name='CONTROL_ID' value='CONTROL_ID' onClick=\"document.location='main.php?page=$page&START_DATE=$START_DATE&END_DATE=$END_DATE&OWNER=$OWNER&STATUS=$STATUS&ORDER_BY=CONTROL_ID&THE_ORDER=DESC;\"</th>";
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
            </tr></thead><tbody>";

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
?>
<div id="pager" class="pager">
	<form>
		<img src="../addons/pager/icons/first.png" class="first"/>
		<img src="../addons/pager/icons/prev.png" class="prev"/>
		<input type="text" class="pagedisplay"/>
		<img src="../addons/pager/icons/next.png" class="next"/>
		<img src="../addons/pager/icons/last.png" class="last"/>
		<select class="pagesize">
			<option selected="selected"  value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option  value="40">40</option>
		</select>
	</form>
</div>

<?php
	
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
		


	</body>
</html>
