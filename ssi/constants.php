<?


error_reporting (E_ALL ^ E_NOTICE);

//PutEnv("ORACLE_SID=officedb");
//PutEnv("ORACLE_HOME=/opt/oracle/product/10.1.0/db_1");

//PutEnv("ORACLE_SID=novahome");
PutEnv("ORACLE_SID=officedev");
PutEnv("ORACLE_HOME=/opt/oracle/product/11.2.0/dbhome_1");

$ORACLE_SID = getenv("ORACLE_SID");
$ORACLE_HOME = getenv("ORACLE_HOME");
$USER = "cnsl_dev_oc";
$PASSWORD = "eqedL0Hg";
//$USER = "time_dev";
//$PASSWORD = "T1m3s";
$MAX_CODES = 20;
$EXPORT_DIR = "/tmp/timesheets";
$DAY_OF_THE_WEEK[] = "Monday";
$DAY_OF_THE_WEEK[] = "Tuesday";
$DAY_OF_THE_WEEK[] = "Wednesday";
$DAY_OF_THE_WEEK[] = "Thursday";
$DAY_OF_THE_WEEK[] = "Friday";
$STANDARD_VACATION_DAYS = 15;
$STANDARD_HOLIDAYS = 10;
$VACATION_DATE_ID = 471;
$HOURS_SPECIAL{274} = 1;
$DEFAULT_LOCATION_ID = 1;
$TITLES = array("Associate","Senior Associate", "Manager", "Principal", "Director", "Affiliated", "Contractor", "Managing Director", "Executive Assistant", "Administrator", "Controller","Receptionist","Marketing Services","Marketing Support","Office Technology","Office Services","Human Resources","Finance","Web Designer","Summer Intern","Researcher","Project Administrator","Senior Software Engineer","Information Technology Engineer","Senior Information Technology Engineer","Software Engineer","Senior Office Engineer","Office Technology Engineer","Software Manager","Vice President, Technology","Database Manager","Project Manager","Information Technology Manager","Vice President, Legal","Senior Web Designer", "Vice President, Finance","Industry Relations Manager","Assistant Vice President, Human Resources","Analyst","Assistant Vice President, Marketing","Principal and Lead for Wealth Management Research","HR and Legal Generalist","Product Manager","Senior Database Engineer","Junior Software Developer","Senior Advisor","Research Principal","Lead Associate","Operations Specialist","Senior Analyst","Document and Record Manager","Partner","Senior Oracle Developer","Sales Consultant","Senior Web Developer","Graphic Design Specialist" );
$DEPARTMENTS  = array("Administration","Consulting","Contractor","Director","Finance","Human Resources","Human Resources / Legal","Information Solutions","Legal","Managing Director","Marketing","Research Services","Technology","Partner");
$OFFICES =  array("Chicago","Madrid","New York","Novarica","Toronto","Boston","Burlington","Home Office");
$DIVISION = array("Novantas","Novarica","Novantas Spain","PMA Corp");
$APPLICATIONS = array("PC SAS","Server SAS");
$EXPENSE_AMOUNT_BEFORE_APPROVAL = '99.99';
$CANADIAN_MAX_TAX_AMOUNT = .15;
$MAX_EXPENSES_TO_SUBMIT = 35;
$ADMINISTRATOR = 'eyanes@novantas.com';
$FETCH_EXPENSES_FOR_LAST_N_DAYS = 7;
$WEBSITE_ADDRESS = 'http://timesheets.novantas.com';
define( 'TIMESHEET_CHANGE_REQUEST', 'eyanes@novantas.com,cvanbuskirk@novantas.com');


        $conn = oci_connect($USER,$PASSWORD,$ORACLE_SID);

	$employee_type_list[Employee] = 1;
	$employee_type_list[Contractor] = 2;
	$employee_type_list[Director] = 3;
	$employee_type_list[EA] = 6;
	$employee_type_list['System Admin'] = 4;
	$employee_type_list['Intranet Admin'] = 5;
	$employee_type_list['Disable Account'] = 0;
?>
