<?php include("header.php"); ?>	
	<!--content-->
	<div class="contact w3layouts-agile">
		<div class="container">
		<div class=" contact-top">
			<label></label>
			<h1>Login</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
		</div><centeR>
		<form action="" method="post">	
			<input type="text" class="form-control" id="inputEmail3" name='username' placeholder="Email" style='height:50px;font-size:25px;'>
		<bR>					
			  <input type="password" class="form-control" id="inputPassword3" name='password' placeholder="Password" style='height:50px;font-size:25px;'>
					<br>
			<input type="submit" value="Login">
					</form>
			</div>
		</div>
		
		
	</div>
	<!--//content-->

<?php include("footer.php"); ?>

<?php
    include ("siteroot.php");
    include($SITEROOT."modules/authenticate.php");

   if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{											
    $username=$_POST['username'];  
	$password=$_POST['password'];  
    
	$stat = authenticate($username , $password);
	if($stat){	
	echo "<script type='text/javascript'>location.href = 'dashboard.php';</script>";
	echo "Successful";
	}
	else{
	echo "failure";
	}
    }
?>