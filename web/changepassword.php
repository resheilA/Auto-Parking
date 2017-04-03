<?php include("sessions.php");?>
<?php include("header.php"); ?>	


 
	<!--content-->
	<div class="contact w3layouts-agile">
		<div class="container">

		<div class=" contact-top">
			<label></label>			
			<h1>Change Your Password</h1>
			<p>Change user account's password from here</p>
			
			 <!--nav-->
       <div class="page-header">       
        <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="dashboard.php">Home</a></li>
        <li role="presentation"><a href="adddomains.php" >Add Domains</a></li>
        <li role="presentation" class="active"><a href="changepassword.php">Change Password</a></li>
		<li role="presentation"><a href="listdomain.php">List all Domains</a></li>
    	<li role="presentation"><a href="viewprofile.php">View Profile</a></li>
		<li role="presentation"><a href="#">Messages</a></li>
      </ul>
	  </div>
	  <br>
	  <h3>You will be notified by email on change of password </h3>
	  <?php 
	  include ("siteroot.php");
      include($SITEROOT."modules/changepassword.php");
	  
	  
   if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{											
    $domain_name=$_POST['domain_name'];  
    changepassword($user, $domain_name);
	}  
	  ?>
      <bR><BR>
	  <form method='post'>
	  <input type='text' name='domain_name' placeholder='Enter new password' style='border:1px solid darkgrey;'>
	  <input type='submit' value='Change Password'>
	  </form>
	   

		
	</div>
	<!--//content-->
 </div>
 </div>
<?php include("footer.php"); ?>
