<?php
    include ("db_con.php");
    include ("File.class.php");
         
 
  /* DB table to use */
    $sTable = "(SELECT cc.CONTROL_ID,CS.SHORT_STATUS,cc.OWNER,cc.FILE_NAME,CC.LINE_CNT,CC.BYTE_CNT,CC.CREATE_DT,cc.FILE_CKSUM,ca.file_type as txn,
CC.ORG_FILE_NAME,cc.FILE_DIR,CC.INT_EXT_FLG,cc.PID,cc.PRIORITY,cc.OSTIMESTAMP,cc.FINAL_TBL_NAME,cc.CNSL_FILE_MV_LU_ID,CC.LAST_JOB_NAME,
CA.DELIMITER,CA.NO_TOKENS,CA.MINLENGTH,CA.MAXLENGTH,CA.HEAD_DATA,CA.TAIL_DATA FROM CNSL_FILE_CONTROL cc left join CNSL_FILE_ATTRIBUTE CA on CC.CONTROL_ID = CA.CONTROL_ID left join CNSL_STATUS_CODES CS on cc.status = CS.STATUS_CODE  )";
     $sIndexColumn = "cc.CONTROL_ID";
	 $aColumns = array( "CONTROL_ID",
	 "SHORT_STATUS",
	 "OWNER",
    "FILE_NAME",
    "LINE_CNT",
    "BYTE_CNT",
	"CREATE_DT",
	"FILE_CKSUM",
	"TXN",
	"ORG_FILE_NAME",
	"FILE_DIR",
	"INT_EXT_FLG",
	"PID",
	"PRIORITY",
	"OSTIMESTAMP",
	"FINAL_TBL_NAME",
	"CNSL_FILE_MV_LU_ID",
	"LAST_JOB_NAME",
	"DELIMITER",
    "NO_TOKENS",
    "MINLENGTH",
	"MAXLENGTH",
    "HEAD_DATA",
    "TAIL_DATA"
	);
	
	 
    /* Database connection information */
    $gaSql['user']     = "cnsl_qa";
    $gaSql['password'] = "t5e3w2a9";
    $gaSql['schema']   = "OFFICEQA";
    $gaSql['port']     = "1521";
    $gaSql['server']   = "qadb01.novantas.com";
     
    $connection_string = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)
    (HOST = {$gaSql['server']  })(PORT = {$gaSql['port'] })))(CONNECT_DATA=(SID={$gaSql['schema']})))";
	
	 /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * If you just want to use the basic configuration for DataTables with PHP server-side, there is
     * no need to edit below this line
     */
     
    /*
     * Oracle connection
     */
	 
     
    $conn = oci_connect($gaSql['user'], $gaSql['password'], "OFFICEQA");
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
 
   /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * If you just want to use the basic configuration for DataTables with PHP server-side, there is
     * no need to edit below this line
     */
     
    /*
     * Oracle connection
     */
     
    $conn = oci_connect($gaSql['user'], $gaSql['password'], $connection_string);
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
 
     
     
    /*
     * Paging
     */
    $sLimit = "";
    if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
    {
        $sLimit = "WHERE  rowsNumerator BETWEEN :iDisplayStart AND :iDisplayEnd";
    }
     
     
    /*
     * Ordering
     */
      
    
$sOrder="partition by 1  order by control_id";
 
    if ( isset( $_GET['iSortCol_0'] ) )
    {
        $sOrder = "ORDER BY ";
         
        //Go over all sorting cols
        for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
        {
            //If need to sort by current col
            if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
            {
                //Add to the order by clause
                $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ];
                 
                //Determine if it is sorted asc or desc
                if (strcasecmp(( $_GET['sSortDir_'.$i] ), "asc") == 0)
                {
                    $sOrder .=" asc, ";
                }else
                {
                    $sOrder .=" desc, ";
                }
            }
        }
        
         
        //Remove the last space / comma
        $sOrder = substr_replace( $sOrder, "", -2 );
         
        //Check if there is an order by clause
        if ( $sOrder == "ORDER BY" )
        {
            /*
            * If there is no order by clause - ORDER BY INDEX COLUMN!!! DON'T DELETE IT!
            * If there is no order by clause there might be bugs in table display.
            * No order by clause means that the db is not responsible for the data ordering,
            * which means that the same row can be displayed in two pages - while
            * another row will not be displayed at all.
            */
            $sOrder = "ORDER BY ".$sIndexColumn;
             
        }
    }
     
     
    /*
     * Filtering
     * NOTE this does not match the built-in DataTables filtering which does it
     * word by word on any field. It's possible to do here, but concerned about efficiency
     * on very large tables.
     */
    $sWhere = "";
    $nWhereGenearalCount = 0;
    if (isset($_GET['sSearch']))
    {
        $sWhereGenearal = $_GET['sSearch'];
    }
    else
    {
        $sWhereGenearal = '';
    }
 
    if ( $_GET['sSearch'] != "" )
    {
        //Set a default where clause in order for the where clause not to fail
        //in cases where there are no searchable cols at all.
        $sWhere = "WHERE (";
        for ( $i=0 ; $i<count($aColumns)+1 ; $i++ )
        {
            //If current col has a search param
            if ( $_GET['bSearchable_'.$i] == "true" )
            {
                //Add the search to the where clause
                $sWhere .= $aColumns[$i]." LIKE '%".$_GET['sSearch']."%' OR ";
                $nWhereGenearalCount += 1;
            }
        }
        $sWhere = substr_replace( $sWhere, "", -3 );
        $sWhere .= ')';
    }
     
    /* Individual column filtering */
    $sWhereSpecificArray = array();
    $sWhereSpecificArrayCount = 0;
    for ( $i=0 ; $i<count($aColumns) ; $i++ )
    {
        if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
        {
            //If there was no where clause
            if ( $sWhere == "" )
            {
                $sWhere = "WHERE ";
            }
            else
            {
                $sWhere .= " AND ";
            }
             
            //Add the clause of the specific col to the where clause
            $sWhere .= $aColumns[$i]." LIKE '%' || :whereSpecificParam".$sWhereSpecificArrayCount." || '%' ";
             
            //Inc sWhereSpecificArrayCount. It is needed for the bind var.
            //We could just do count($sWhereSpecificArray) - but that would be less efficient.
            $sWhereSpecificArrayCount++;
             
            //Add current search param to the array for later use (binding).
            $sWhereSpecificArray[] =  $_GET['sSearch_'.$i];
             
        }
    }
     
    //If there is still no where clause - set a general - always true where clause
    if ( $sWhere == "" )
    {
        $sWhere = " WHERE 1=1";
    }
     
     
    /*
     * SQL queries
     * Get data to display
     */
     //Inner sql - not being fetched by itself.
    $sQueryInner = "SELECT ".implode(', ', $aColumns).", row_number() over (".$sOrder.") rowsNumerator FROM " . $sTable . " ". $sWhere;
    $sQueryFinal = "SELECT ".implode(', ', $aColumns)." FROM (".$sQueryInner.") qry ".$sLimit." ORDER BY rowsNumerator";

    /* Data set length after filtering */
    $sQueryFinalCount = "SELECT COUNT(*) as \"totalRowsCount\" FROM (".$sQueryInner.") qry";
    
    $iFilteredTotal = 0;
     
    /* Total data set length */
    $sQueryTotalCount = "SELECT COUNT(CONTROL_ID) as \"totalRowsCount\" FROM  ".$sTable;
 
    //Create Statments
    $statmntFinal = oci_parse($conn, $sQueryFinal);
    $statmntFinalCount = oci_parse($conn, $sQueryFinalCount);
    $statmntTotalCount = oci_parse($conn, $sQueryTotalCount);
	
	//Bind variables.
     
    if ( isset( $_GET['iDisplayStart'] ))
    {
        $dsplyStart = $_GET['iDisplayStart'];
    }
    else{
        $dsplyStart = 0;
    }
     
    if ( isset( $_GET['iDisplayLength'] ) && $_GET['iDisplayLength'] != '-1' )
    {
        $dsplyRange = $_GET['iDisplayLength'];
        if ($dsplyRange > (2147483645 - intval($dsplyStart)))
        {
            $dsplyRange = 2147483645;
        }
        else
        {
            $dsplyRange = intval($dsplyStart) +  intval($dsplyRange);
        }
    }
    else
    {
        $dsplyRange = 2147483645;
    }
     
    //Bind variables of number of rows to fetch.

    oci_bind_by_name($statmntFinal, ':iDisplayStart', $dsplyStart);
    oci_bind_by_name($statmntFinal, ':iDisplayEnd', $dsplyRange);
 
    //Bind all variables of general search
    for ( $i = 0 ; $i < $nWhereGenearalCount ; $i++ )
    {
        oci_bind_by_name($statmntFinal, ':whereParam'.$i , $sWhereGenearal);
        oci_bind_by_name($statmntFinalCount, ':whereParam'.$i , $sWhereGenearal);
    }
     
    //Bind all variables of specific search
    for ( $i = 0 ; $i < count($sWhereSpecificArray) ; $i++ )
    {
        oci_bind_by_name($statmntFinal, ':whereSpecificParam '.$i , $sWhereSpecificArray[$i]);
        oci_bind_by_name($statmntFinalCount, ':whereSpecificParam '.$i , $sWhereSpecificArray[$i]);
    }
     
	 
	 
	 
	 
     
    //Execute select

    oci_execute($statmntTotalCount);
    $iTotal = 0;
    while ($row = oci_fetch_array($statmntTotalCount, OCI_ASSOC))
    {
        $iTotal = $row['totalRowsCount'];
    }
    oci_free_statement($statmntTotalCount);
             
    oci_execute($statmntFinalCount);
    $iFilteredTotal = 0;
    while ($row = oci_fetch_array($statmntFinalCount, OCI_ASSOC))
    {
        $iFilteredTotal = $row['totalRowsCount'];
    }
    oci_free_statement($statmntFinalCount);
     ;
     
    /*
     * Output
     */
/* $sEcho=1;      
$_GET['sEcho']=1;  */
      
    $output = array(
        "sEcho" => intval($_GET['sEcho']),
        "iTotalRecords" => $iTotal,
        "iTotalDisplayRecords" => $iFilteredTotal,
        "aaData" => array()
    );
       
    oci_execute($statmntFinal);
     
    while ( $aRow = oci_fetch_array($statmntFinal, OCI_ASSOC) )
    {
        $row = array();
        for ( $i=0 ; $i<count($aColumns) ; $i++ )
        {
            if ( $aColumns[$i] == "version" )
            {
                /* Special output formatting for 'version' column */
                $row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
            }
            else if ( $aColumns[$i] != ' ' )
            {
                /* General output */
                $row[] = $aRow[ $aColumns[$i] ];
            }
        }
        $output['aaData'][] = $row;
    }
 
    oci_free_statement($statmntFinal);
     
    oci_close($conn);
    echo json_encode( $output );
?>
