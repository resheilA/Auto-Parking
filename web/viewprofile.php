<?php include("sessions.php");?>
<?php include("header.php"); ?>	

	<!--content-->
	<div class="contact w3layouts-agile">
		<div class="container">

		<div class=" contact-top">
			<label></label>			
			<h1>Your Profile</h1>
			<p>Details</p>
			
			 <!--nav-->
       <div class="page-header">       
        <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="dashboard.php">Home</a></li>
        <li role="presentation"><a href="adddomains.php" >Add Domains</a></li>
        <li role="presentation"><a href="changepassword.php">Change Password</a></li>
		<li role="presentation"><a href="listdomain.php">List all Domains</a></li>
     	<li role="presentation"  class="active"><a href="viewprofile.php">View Profile</a></li>
		<li role="presentation"><a href="messages.php">Messages</a></li>
      </ul>
	  </div>
	  <br>
	 <br>
	 
<?php 
   include ("siteroot.php");
			  include($SITEROOT."modules/userdetails.php");
          //	  include($SITEROOT."modules/checkblock.php");
		
     $nooddomainallowed =  alloweddomains($user);
	 $added_on = addedon($user);

	 
	 echo "<h3>User name - $user</h3><br><h3> You signed up on ".date('jS M Y', strtotime($added_on))."</h3><br><h3>You are allowed to add $nooddomainallowed domain names.</h3>"; ?>
 </div>
 </div>
<?php include("footer.php"); ?>
