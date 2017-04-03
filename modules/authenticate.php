<?php 
include("siteroot.php");
include($SITEROOT."modules/database/select.php");
function authenticate($username, $password){
$status = select("user", "username='$username'", "Password");
if($status == md5($password)){
return true;
}
else{
return false;
}
}

?>