<?php include("sessions.php");?>
<?php include("header.php"); ?>	


 <?php 
   include_once("siteroot.php");
  include_once($SITEROOT."modules/userdetails.php");
   include_once($SITEROOT."modules/functional/adddomain.php");	  
	  $noofdom = alloweddomains($user);
?>	
	
	<!--content-->
	<div class="contact w3layouts-agile">
		<div class="container">

		<div class=" contact-top">
			<label></label>			
			<h1>Adding A Domain</h1>
			<p>Add Domain for parking</p>
			
			 <!--nav-->
       <div class="page-header">       
        <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="dashboard.php">Home</a></li>
        <li role="presentation" class="active"><a href="adddomains.php" >Add Domains</a></li>
		   <li role="presentation"><a href="changepassword.php">Change Password</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
      </ul>
	  </div>
	  <br>
	  <h3>You have credit of <?php echo $noofdom; ?> domain names remaining </h3>
	  <?php  	
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{											
    $domain_name=$_POST['domain_name'];  
	
	if($noofdom > 0){
	  adddomain($user, $domain_name);
	  }
	}  
	  ?>
      <bR><BR>
	  <form method='post'>
	  <input type='text' name='domain_name' placeholder='Enter your domain name' style='border:1px solid darkgrey;'>
	  <input type='submit' value='Add Domain'>
	  </form>
	   

		
	</div>
	<!--//content-->
 </div>
 </div>
<?php include("footer.php"); ?>
