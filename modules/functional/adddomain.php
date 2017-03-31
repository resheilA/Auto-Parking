<?php 

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



function addbulkdomain($username, $domainlist){
	$arr = explode(',', $domainlist);

	for($i=0; $i < sizeof($arr); $i++)
	{
      adddomain($username, $arr[$i]);
	}
}
