 
<?php  


if(isset($_GET['domain_name'])){$domain_name = $_GET['domain_name'];}else{$domain_name = "Moose";}
if(isset($_GET['theme'])){$theme = $_GET['theme'];}else{$theme = "temp1";}

$root = "/mypark/temp/$theme/web/";

include("siteroot.php");
include_once($SITEROOT."/modules/database/connectdb.php");
include_once($SITEROOT."/modules/getwebdetails.php");

$facebooklink = getfblink($domain_name);
$twitterlink = gettwitterlink($domain_name);
$disclaimer = getdisclaimer();
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Welcome to <?php echo $domain_name; ?></title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link href="<?php echo $root; ?>css/base.css" rel="stylesheet" >  
   <link href="<?php echo $root; ?>css/main.css" rel="stylesheet" >
   <link href="<?php echo $root; ?>css/vendor.css" rel="stylesheet">     

   <!-- script
   ================================================== -->
	 <script src="<?php echo $root; ?>js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="img?>image/png" href="favicon.png">

</head>

<body>


	<!-- main content
   ================================================== -->
   <main id="main-404-content" class="main-content-particle-js">

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>

		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
			  		
			  			<h1 class="kern-this">Page Under Construction.</h1>
			  			<p>
						We are currently working on creating something amazing. We are launching soon. Visit us again after few days.
			  			</p>
			   </div>	   			

			   	</div> <!-- /twelve --> 		   			
		   	</div> <!-- /row -->    		 		
		   </div> <!-- /main-content --> 

		   <footer>
		   	<div class="row">

		   		<div class="col-seven tab-full social-links pull-right">
			   		<ul>
				   		<li><?php if(isset($facebooklink)){echo "<a href='$facebooklink'><img src='".$root."facebook.png'></a>";}?></li>
					      <li><?php if(isset($twitterlink)){echo "<a href='$twitterlink'><img src='".$root."twitter.png'></a>";}?></li>					      
				   	</ul>
			   	</div>
		   			
		  			<div class="col-five tab-full bottom-links">
			   		
				   	<div class="credits">
					<p><?php echo $disclaimer;?></p>
				   	<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>
				   	</div>
			   	</div>   		   		

		   	</div> <!-- /row -->    		  		
		   </footer>

		</div> <!-- /content-wrap -->
   
   </main> <!-- /main-404-content -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
    <script src="<?php echo $root; ?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo $root; ?>js/plugins.js"></script>
    <script src="<?php echo $root; ?>js/main.js"></script>

</body>

</html>