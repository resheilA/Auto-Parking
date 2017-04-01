<?php 
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