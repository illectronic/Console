<?

PutEnv("ORACLE_SID=OFFICEDEV");
PutEnv("ORACLE_HOME=/opt/oracle/product/11.2.0/dbhome_1");
PutEnv ("LD_LIBRARY_PATH=/opt/oracle/product/11.2.0/dbhome_1/lib");
global $ORACLE_SID;
$ORACLE_SID  = getenv("ORACLE_SID");
$ORACLE_HOME = getenv("ORACLE_HOME");
$USER_ORA = "cnsl_dev_oc";
$PASSWORD_ORA = "eqedL0Hg"; 




/*


PutEnv("ORACLE_SID=officeqa");
PutEnv("ORACLE_HOME=/a1_01/app/oracle/product/11.2.0/dbhome_1");

$ORACLE_SID = getenv("ORACLE_SID");
$ORACLE_HOME = getenv("ORACLE_HOME");
$USER_ORA = "time_dev";
$PASSWORD_ORA = "T1m3s";
*/

$conn = oci_connect( $USER_ORA, $PASSWORD_ORA, $ORACLE_SID );



if( !$conn ){
   print "<span style='font-size:250%;'>\n";
   print "<BR>CONNECTION FAILED!!!<br>\n";
   print "</span>\n";
   die;
}




?>

