<?php include("sessions.php");?>
<?php include("header.php"); ?>	


 
	<!--content-->
	<div class="contact w3layouts-agile">
		<div class="container">

		<div class=" contact-top">
			<label></label>			
			<h1>Domain Names</h1>
			<p>Here's your list of domain names</p>
			
			 <!--nav-->
       <div class="page-header">       
        <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="dashboard.php">Home</a></li>
        <li role="presentation"><a href="adddomains.php" >Add Domains</a></li>
        <li role="presentation"><a href="changepassword.php">Change Password</a></li>
		<li role="presentation" class="active"><a href="listdomain.php">List all Domains</a></li>
     	<li role="presentation"><a href="viewprofile.php">View Profile</a></li>
		<li role="presentation"><a href="messages.php">Messages</a></li>
      </ul>
	  </div>
	  <br>
	  <h3>You can see your list of domain names here with other details. </h3>	<br>
     </center>
	 <br>
						<form method='get' style='text-align:right;'>
						<select name='orderby' style='height:40px;'>
						<option value='Time_added'>Date Added</option>
						<option value='Time_deleted'>Date Deleted</option>
						<option value='Domain_name'> Domain Name</option>
						</select>
		                <select name='sortby' style='height:40px;'>
						<option value='ASC'>Ascending</option>
						<option value='DESC'>Decending</option>						
						</select>				
						<input type='submit' value='Sort'>
						</form>
	 <center>	 
	 <div class="bs-example" data-example-id="contextual-table" style="border: 1px solid #eee">
	 <table class="table">
      <thead>
        <tr>
          <th>Domain Name</th>          
          <th>Date Added</th>
          <th>Date Expiring</th>
		  <th>Blocked Status</th>
	   </tr>
      </thead>
      <tbody>
        	<?php
			
			  include ("siteroot.php");
			  include($SITEROOT."modules/domaindetails.php");
         	  include($SITEROOT."modules/checkblock.php");
				
			if(!isset($_GET['orderby']))
		      {	
			  $arr1 = domainnames($user);
			  }
		    else {
			    $arr1 = domainbyorder($user, $_GET['orderby'], $_GET['sortby']);
			  }
			  
			   $i=0;$bstatus = "Unblocked";
			  while($i < sizeof($arr1)){
	          
			  $statusdomain = checkblock($arr1[$i]);
              if($statusdomain == 0){$bstatus = "Unblocked";}else {$bstatus = "Blocked";}             
 						   
			  echo "<tr align='left'>
			        <th scope='row'>".$arr1[$i]."</th>
					<td>".date("jS M Y", strtotime(getaddeddate($arr1[$i])))."</td>
					<td>".date("jS M Y", strtotime(getdeletiondate($arr1[$i])))."</td>
					<td>".$bstatus."</td>
					</tr>";
			  $i++; 
			  }
		    ?>
      </tbody>
     </table> 	
	 </div>
	</div>
	<!--//content-->
 </div>
 </div>
<?php include("footer.php"); ?>
