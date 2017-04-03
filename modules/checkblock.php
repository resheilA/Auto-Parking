<?php 

function checkblock($domainname){
$status = select("domain_added", "Domain_name = '$domainname'", "Blocked");
return $status;
}

function checkblockuser($username){
$status = select("user", "username='$username'", "Blocked");
return $status;
}


?>