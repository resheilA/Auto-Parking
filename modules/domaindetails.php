<?php
include_once ("siteroot.php");
include_once($SITEROOT."modules/database/connectdb.php");
include_once($SITEROOT."modules/database/select.php");

function domainnames($username){
$domains = select("domain_added", "Username='$username'", "Domain_name");
return $domains;
}

function getaddeddate($domainname){
$domainadded = select("domain_added", "Domain_name='$domainname'", "Time_added");
return $domainadded;
}

function getdeletiondate($domainname){
$domaindeletion = select("domain_added", "Domain_name='$domainname'", "Time_deleted");
return $domaindeletion;
}

?>