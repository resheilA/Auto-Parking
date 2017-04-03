<?php 
include ("siteroot.php");
include($SITEROOT."modules/database/connectdb.php");
include($SITEROOT."modules/database/update.php");

function changepassword($username, $password){
connectdb();
update("user", "Password", md5($password), "Username = '$username'");
}