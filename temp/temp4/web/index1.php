<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
 
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
<html>
	<head>
		<title>Welcome to <?php echo $domain_name; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="<?php echo $root; ?>assets/css/main.css" rel="stylesheet"  />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1><?php echo $domain_name; ?></h1>
						 <p>We are working on our website. Releasing soon !!</p>						 
						<nav>
							<ul>
								<li><?php if(isset($twitterlink)){echo "<a href='$twitterlink'><img src='".$root."twitter.png'></a>";}?></li>
								<li><?php if(isset($facebooklink)){echo "<a href='$facebooklink'><img src='".$root."facebook.png'></a>";}?></li>
							</ul>
						</nav>
						<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>
					</header>

				<!-- Footer -->
					
					<footer id="footer">
					<p><?php echo $disclaimer;?></p>
						
					</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>