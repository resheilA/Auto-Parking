 
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
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Welcome to <?php echo $domain_name; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo $root; ?>css/style.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="wrap">
			<div class="content">
				<div class="logo">
					<a href="index.html"><h1><?php echo $domain_name; ?></h1></a>
				</div>
				<p>Be ready, we are launching soon &#33;</p>
				
				<div class="footer">
				<div class="social-icons">
					   <?php if(isset($facebooklink)){echo "<a href='$facebooklink'><img src='".$root."img/facebook.png'></a>";}?>
				        <?php if(isset($twitterlink)){echo "<a href='$twitterlink'><img src='".$root."img/twitter.png'></a>";}?>
					<div class="clear"> </div>
				</div>
				<p><?php echo $disclaimer;?></p>
				<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>
				</div>
			</div>
		</div>
	</body>
</html>

