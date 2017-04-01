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