<?php 

include ("siteroot.php");
include_once($SITEROOT."modules/database/connectdb.php");
include($SITEROOT."modules/database/select.php");

function gettheme($domainname){
$domaintheme = select("website_details", "Name='$domainname'", "Theme");
return $domaintheme;
}

function getfblink($domainname){
$domainfblink = select("website_details", "Name='$domainname'", "Facebook_link");
if($domainfblink){
return $domainfblink;
}
}
function gettwitterlink($domainname){
$domaintwitterlink = select("website_details", "Name='$domainname'", "Twitter_link");
if($domaintwitterlink){
return $domaintwitterlink;
}
}

function getdisclaimer(){
return "Here we will keep the disclaimer.";
}

?>