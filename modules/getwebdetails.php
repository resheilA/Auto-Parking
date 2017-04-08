<?php 

function gettheme($domainname){
$domainadded = select("domain_added", "Domain_name='$domainname'", "Time_added");
return $domainadded;
}

?>