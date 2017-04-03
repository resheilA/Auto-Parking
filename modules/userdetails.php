<?php 
  include ("siteroot.php");
   include_once($SITEROOT."modules/database/select.php");
   
function alloweddomains($username){
$alloweddomains = select("user", "username='$username'", "Allowed");
return $alloweddomains;
}

function addedon($username){
$alloweddomains = select("user", "username='$username'", "Added_on");
return $alloweddomains;
}

function getusername($domainname){
$username = select("domain_added", "Domain_name = '$domainname'", "Username");
return $username;
}

?>