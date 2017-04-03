<?php include("sessions.php");?>
<?php include("header.php"); ?>	


 <?php 
   include_once("siteroot.php");
  //include_once($SITEROOT."modules/userdetails.php");
   include_once($SITEROOT."modules/functional/adduser.php");	  
	
?>	
	
	<!--content-->
	<div class="contact w3layouts-agile">
		<div class="container">

		<div class=" contact-top">
			<label></label>			
			<h1>Adding A User</h1>
			<p>Add User for parking</p>
			
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
	  <h3>You can add a user from here. Email will be automatically sent to email address. </h3>
	  <?php  	
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{											
    $pw1=$_POST['pw1'];  
	$pw2=$_POST['pw2'];  
	$username=$_POST['user_name'];  
	
	if($pw1 == $pw2){
	  adduser($username, $pw1);
	}  
	else {
	    echo(" <br>    <div class='alert alert-danger' role='alert'>
        <strong>Entered Password don't match.
      </div>
   ");
	}
	}
	  ?>
      <bR><BR>
	  <form method='post'>	  
	  <input type='text' name='user_name' placeholder='Enter email address' style='border:1px solid darkgrey;'>
	  <input type='text' name='pw1' placeholder='Enter users password' style='border:1px solid darkgrey;'>
	  <input type='text' name='pw2' placeholder='Re-enter users password' style='border:1px solid darkgrey;'>	 
	  <input type='submit' value='Add User'>
	  </form>
	   

		
	</div>
	<!--//content-->
 </div>
 </div>
<?php include("footer.php"); ?>
