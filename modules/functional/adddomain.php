<?php 
 include ("siteroot.php");
 include($SITEROOT."modules/database/insert.php");
	  
function adddomain($user, $domain_name){


//Ending Date
date_default_timezone_set("UTC");
$time_end = date('Y-m-d H:i:s', strtotime('+1 years'));

//Adding Date
$time_add = date('Y-m-d H:i:s', strtotime('+0 years'));

$arr1 = array("Domain_name", "Username", "Time_added", "Time_deleted","Blocked");
$arr2 = array($domain_name, $user, $time_add, $time_end, 0);

$status = insertdb("domain_added", $arr1, $arr2);

if($status){
//Changing the allowed number of domain names.
$query2 = "UPDATE `user` SET `Allowed` = `Allowed` - 1 WHERE `Username` = '$user'";
$result2=mysql_query($query2);

if ($result2)
{
    echo "Successful";  
    return 1;
}
else
{

    echo mysql_error();
    return 0;   
}
}

}



function addbulkdomain($username, $domainlist){
	$arr = explode(',', $domainlist);

	for($i=0; $i < sizeof($arr); $i++)
	{
     $status =  adddomain($username, $arr[$i]);
	  
	 if($status){ 
	 //Changing the allowed number of domain names. 
	  $query2 = "UPDATE `user` SET `Allowed` = `Allowed` - 1 WHERE `Username` = '$user'";
		$result2=mysql_query($query2);

		if ($result2)
		{
			echo "Successful";  
			return 1;
		}
		else
		{

			echo mysql_error();
			return 0;   
		}
	}
	
	}
	
}
