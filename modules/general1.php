<?php 
include("database/connectdb.php");

function update($tablename, $tablerow, $value, $condition){

//include("database/connectdb.php"); 
connectdb();
 
echo $query = "UPDATE $tablename SET $tablerow = '$value' WHERE $condition";	

$result=mysql_query($query);
	if(! $result)
	{
	  die(mysql_error());
	}	
}

function blockdomain($domainame){
update("domain_added", "Blocked", "1", "domain_name = '$domainame'");
}


function unblockdomain($domainame){
update("domain_added", "Blocked", "0", "domain_name = '$domainame'");
}

function renewdomain($domainname, $year){
connectdb();

// This part has to be later modified with select queries. Function retrieves deleted date. 
 $sql = "SELECT Time_deleted FROM domain_added where domain_name = '$domainname';"
											 or die("Couldnt find the table");
											 
											 $sql_result = mysql_query($sql) or die ( mysql_error());
											 										
											 while($row = mysql_fetch_array($sql_result))
											 {
											$deleteDate=$row["Time_deleted"];										
											}
								
								
date_default_timezone_set("UTC");
$time = date('Y-m-d H:i:s', strtotime('+'.$year.' years', strtotime($deleteDate)));
update("domain_added","Time_deleted", "$time", "domain_name = '$domainname'");

}



function changepassword($username, $password){
connectdb();
update("user", "Password", md5($password), "Username = '$username'");
}

function blockuser($username){
update("user", "Blocked", "1", "Username = '$username'");
}


function unblockuser($username){
update("user", "Blocked", "0", "Username = '$username'");
}

function addcredits($username, $credits){
update("user", "Allowed", $credits, "Username = '$username'");
}

//addcredits("Resheil", 10);
//renewdomain("hacker.in","1");   ---- Check renew domains
?>