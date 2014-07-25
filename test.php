<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/console.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jq.css" type="text/css" media="screen" />
<script src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.widgets.js"></script>
 <script type="text/javascript">
$(function() {

  // call the tablesorter plugin
  $("table.tablesorter").tablesorter({
    theme: 'blue',

    // hidden filter input/selects will resize the columns, so try to minimize the change
    widthFixed : true,

    // initialize zebra striping and filter widgets
    widgets: ["zebra", "filter"],

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
		
		</head>
		<body>
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
<tr>
    <td class='top-body-cell col1'><div>55017</div></td>
    <td class='top-body-cell col2'><div>30</div></td>
    <td class='top-body-cell col3'><div>P</div></td>
    <td class='top-body-cell col4'><div>P.xxx.rcb.tda.out</div></td>
    <td class='top-body-cell col5'><div>9345</div></td>
    <td class='top-body-cell col6'><div>9167445</div></td>
    <td class='top-body-cell col7'><div>27-SEP-13</div></td>
    <td class='top-body-cell col8'><div>3032901441</div></td>
    <td class='top-body-cell col9'><div>TDA</div></td>
    <td class='top-body-cell col10'><div>rcb.tda.out.pgp</div></td>
    <td class='top-body-cell col11'><div></div></td>
    <td class='top-body-cell col12'><div></div></td>
    <td class='top-body-cell col13'><div>30767</div></td>
    <td class='top-body-cell col14'><div></div></td>
    <td class='top-body-cell col15'><div>Sep 27 14:10</div></td>
    <td class='top-body-cell col16'><div></div></td>
    <td class='top-body-cell col17'><div>1016</div></td>
    <td class='top-body-cell col18'><div>aLoader</div></td>
    <td class='top-body-cell col19'><div></div></td>
    <td class='top-body-cell col20'><div>1</div></td>
    <td class='top-body-cell col21'><div>980</div></td>
    <td class='top-body-cell col22'><div>980</div></td>
    <td class='top-body-cell col23'><div>02/07/201302</div></td>
    <td class='top-body-cell col24'><div>02/07/201302</div></td>
</tr>
<tr>
    <td class='top-body-cell col1'><div>59384</div></td>
    <td class='top-body-cell col2'><div>90</div></td>
    <td class='top-body-cell col3'><div>BO006</div></td>
    <td class='top-body-cell col4'><div>BOT6.59384.xxx.HHtoRM201102.csv</div></td>
    <td class='top-body-cell col5'><div>2649531</div></td>
    <td class='top-body-cell col6'><div>145838345</div></td>
    <td class='top-body-cell col7'><div>18-SEP-13</div></td>
    <td class='top-body-cell col8'><div>2054991495</div></td>
    <td class='top-body-cell col9'><div></div></td>
    <td class='top-body-cell col10'><div></div></td>
    <td class='top-body-cell col11'><div></div></td>
    <td class='top-body-cell col12'><div></div></td>
    <td class='top-body-cell col13'><div></div></td>
    <td class='top-body-cell col14'><div></div></td>
    <td class='top-body-cell col15'><div></div></td>
    <td class='top-body-cell col16'><div></div></td>
    <td class='top-body-cell col17'><div></div></td>
    <td class='top-body-cell col18'><div></div></td>
    <td class='top-body-cell col19'><div></div></td>
    <td class='top-body-cell col20'><div></div></td>
    <td class='top-body-cell col21'><div></div></td>
    <td class='top-body-cell col22'><div></div></td>
    <td class='top-body-cell col23'><div></div></td>
    <td class='top-body-cell col24'><div></div></td>
</tr>
<tr>
    <td class='top-body-cell col1'><div>59385</div></td>
    <td class='top-body-cell col2'><div>90</div></td>
    <td class='top-body-cell col3'><div>BO</div></td>
    <td class='top-body-cell col4'><div>BO938v</div></td>
    <td class='top-body-cell col5'><div>2655733</div></td>
    <td class='top-body-cell col6'><div>146178874</div></td>
    <td class='top-body-cell col7'><div>18-SEP-13</div></td>
    <td class='top-body-cell col8'><div>2165512106</div></td>
    <td class='top-body-cell col9'><div></div></td>
    <td class='top-body-cell col10'><div></div></td>
    <td class='top-body-cell col11'><div></div></td>
    <td class='top-body-cell col12'><div></div></td>
    <td class='top-body-cell col13'><div></div></td>
    <td class='top-body-cell col14'><div></div></td>
    <td class='top-body-cell col15'><div></div></td>
    <td class='top-body-cell col16'><div></div></td>
    <td class='top-body-cell col17'><div></div></td>
    <td class='top-body-cell col18'><div></div></td>
    <td class='top-body-cell col19'><div></div></td>
    <td class='top-body-cell col20'><div></div></td>
    <td class='top-body-cell col21'><div></div></td>
    <td class='top-body-cell col22'><div></div></td>
    <td class='top-body-cell col23'><div></div></td>
    <td class='top-body-cell col24'><div></div></td>
</tr>

		
	</tbody></table>	
		</body></html>