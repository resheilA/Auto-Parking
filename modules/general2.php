<?php 

include_once("database/connectdb.php");

function select($tablename,$condition,$fetch){
 connectdb();
 
 $sql = "SELECT $fetch FROM $tablename where $condition;"
											 or die("Couldnt find the table");
											 
											 $sql_result = mysql_query($sql) or die ( mysql_error());											 											
											 $i=0;
											 
											 $num_rows = mysql_num_rows($sql_result);
											 
											 if($num_rows > 1){
											 while($row = mysql_fetch_array($sql_result))
											 {
											 
											$value[$i]=$row["$fetch"];	
											$i++;		
											}	
											}
											else{
											while($row = mysql_fetch_array($sql_result))
											 {											 
											$value=$row["$fetch"];			
											}	
											}
return $value;
}

function authenticate($username, $password){
$status = select("user", "username='$username'", "Password");
if($status == md5($password)){
return true;
}
else{
return false;
}
}

function alloweddomains($username){
$alloweddomains = select("user", "username='$username'", "Allowed");
return $alloweddomains;
}

function addedon($username){
$alloweddomains = select("user", "username='$username'", "Added_on");
return $alloweddomains;
}


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

function getusername($domainname){
$username = select("domain_added", "Domain_name = '$domainname'", "Username");
return $username;
}

function checkblock($domainname){
$status = select("domain_added", "Domain_name = '$domainname'", "Blocked");
return $status;
}

function checkblockuser($username){
$status = select("user", "username='$username'", "Blocked");
return $status;
}


/*
$stat = authenticate("resheil", "mick");
if($stat){
echo "Successful";
}
else{
echo "failure";
}

echo checkblockuser("resheil");
echo getusername("webportal.in");
echo getdeletiondate("webportal.in");
echo alloweddomains("resheil");
*/
?>