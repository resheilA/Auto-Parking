<?php
include_once ("siteroot.php");
include_once($SITEROOT."modules/database/connectdb.php");
include_once($SITEROOT."modules/database/select.php");
include_once($SITEROOT."modules/database/selectsort.php");

function domainnames($username){
$domains = select("domain_added", "Username='$username'", "Domain_name");
return $domains;
}

function domainbyorder($username,$sortby, $order){
$domains = selectsort("domain_added", "Username='$username'", "Domain_name", $sortby, $order);
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