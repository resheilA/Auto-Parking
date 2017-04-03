<?php
include_once ("siteroot.php");
include_once($SITEROOT."modules/database/connectdb.php");

function update($tablename, $tablerow, $value, $condition){

//include("database/connectdb.php"); 
connectdb();
 
$query = "UPDATE $tablename SET $tablerow = '$value' WHERE $condition";	

$result=mysql_query($query);

	if(mysql_affected_rows() == 0)
	{
	  echo(" <br>    <div class='alert alert-danger' role='alert'>
        <strong>Oh snap!</strong> Error updating ! Check your input.
      </div>
   ");
    return 0;
	}
    else {
	echo '<br><div class="alert alert-success" role="alert">
        <strong>Well done!</strong> Successfully Done.
      </div>';
     return 1;
	}
}