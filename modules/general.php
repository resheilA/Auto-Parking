<?php 

function connectdb()
{

	$connection= mysql_connect("localhost","root","")
	or die("Error : Couldn't connect to the server.");      

	//select a database to work with
	$db = mysql_select_db("mypark",$connection)
	or die("Error : Could not connect to database.");      

}

/* Testing for insertdb

$arr1 = array("Domain_name", "Username");
$arr2 = array("riot.in", "Roy");

insertdb("domain_added", $arr1, $arr2);

*/

/* Adding 
               Domain Testing 
			   User
			   Log 
						
$domain_name = "webportal.in";
$user = "resheil";
adddomain($user, $domain_name);

adduser("Resheil","rick");

addlog("Resheil", "Logged into the system");

addbulkdomain("resheil", "webportal.in, resheil.com, bharatmart.com, hotmail.com, google.com, daiict.ac.in");
*/


function addbulkdomain($username, $domainlist){
	$arr = explode(',', $domainlist);

	for($i=0; $i < sizeof($arr); $i++)
	{
      adddomain($username, $arr[$i]);
	}
}

function adduser($username, $password){

$password = md5($password);
$time_add = date('Y-m-d H:i:s', strtotime('+0 years'));
$arr1 = array("Username", "Password", "Added_on", "Block");
$arr2 = array($username, $password, $time_add, 0);

insertdb("user", $arr1, $arr2);
}

function addlog($username, $activity){

$time_add = date('Y-m-d H:i:s', strtotime('+0 years'));
$ip = $_SERVER['REMOTE_ADDR'];
$arr1 = array("Username", "Activity",  "IP", "Time_added");
$arr2 = array($username, $activity, $ip, $time_add);

insertdb("log", $arr1, $arr2);
}

function adddomain($user, $domain_name){

//Ending Date
date_default_timezone_set("UTC");
$time_end = date('Y-m-d H:i:s', strtotime('+1 years'));

//Adding Date
$time_add = date('Y-m-d H:i:s', strtotime('+0 years'));

$arr1 = array("Domain_name", "Username", "Time_added", "Time_deleted","Blocked");
$arr2 = array($domain_name, $user, $time_add, $time_end, 0);

insertdb("domain_added", $arr1, $arr2);

}

function insertdb($table_name, $table_column, $column_values)
{   
    $string1= "" ; $string2 = ""; 
    for($i=0;$i<sizeof($table_column);$i++)
	{
	 if($i == 0){
	 $string1 = $string1.$table_column[$i];
	 $string2 = $string2."'".$column_values[0]."'";
	 }
	 else{
	 $string1 = $string1.",".$table_column[$i];
	 $string2 = $string2.", '".$column_values[$i]."'";
	 }
	}

	connectdb();
	$query = "INSERT INTO $table_name ($string1) VALUES ($string2)";
	
	$result=mysql_query($query);
	if(! $result)
	{
	  die(mysql_error());
	}
    
} 





?>