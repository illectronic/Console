<?php
require_once("adldap/adLDAP.php");

echo "testing adlap...";

try {
    $adldap = new adLDAP();
}
catch (adLDAPException $e) {
    echo $e;
    exit();   
}

$username="ocohen";
$password="R3dcr3s89";

$authUser = $adldap->authenticate($username,$password);
if ($authUser == true) {
  echo "User authenticated successfully";
$result = $adldap->user()->inGroup("test","Domain Users");
  echo $result;
}
else {
 echo $adldap->getLastError();
  echo "...User authentication unsuccessful";
}

?>
