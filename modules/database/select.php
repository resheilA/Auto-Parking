<?php
include_once("connectdb.php");
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
?>