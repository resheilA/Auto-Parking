<?php include("sessions.php");?>
<?php //include("adminauth.php"); ?>
<?php include("header.php"); ?>	

	<!--content-->
	<div class="contact w3layouts-agile">
		<div class="container">

		<div class=" contact-top">
			<label></label>			
			<h1>Block Domain</h1>
			<p>Admin can block a domain name from here</p>
			
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
			  include($SITEROOT."modules/block.php");
	
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{											
    $domain_name=$_POST['domain_name'];  
		
	 blockdomain($domain_name);
	
          //	  include($SITEROOT."modules/checkblock.php");
	}
?>	
 <h3> Enter a domain name to block</h3>
	<form method='post'>
	  <input type='text' name='domain_name' placeholder='Enter your domain name' style='border:1px solid darkgrey;'>
	  <input type='submit' value='Block Domain'>
	  </form>
	   
 </div>
 </div>
<?php include("footer.php"); ?>
