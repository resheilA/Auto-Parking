<?php 
 include_once("siteroot.php");
 include_once($SITEROOT."modules/database/connectdb.php");

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
	// echo mysql_error();
	  echo(" <br>    <div class='alert alert-danger' role='alert'>
        <strong>Oh snap!</strong> Record already present.Try again with some other name.
      </div>
   ");
    return 0;
	}
    else {
	echo '<br><div class="alert alert-success" role="alert">
        <strong>Well done!</strong> Successfully Done.
      </div>';
	  return 1 ;

	}
} 