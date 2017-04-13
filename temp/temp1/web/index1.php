<!DOCTYPE HTML>
 
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
	<link href="<?php echo $root; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div class="content">
			<div class="wrap">
				<div class="content-grid">
			<p><img src="<?php echo $root; ?>images/top.png" title=""></p>
			</div>
				<div class="grid">
		<p><img src="<?php echo $root; ?>images/coming.png" title=""></p>
		<h3>We are Still Working on it.</h3>
		
		
								<div class="clear"></div>
								</div>
		<div class="clear"></div>
		<div class="footer">
			<p class="a">
			<?php if(isset($facebooklink)){echo "<a href='$facebooklink'><img src='".$root."images/facebook.png'></a>";}?>
			<?php if(isset($twitterlink)){echo "<a href='$twitterlink'><img src='".$root."images/twitter.png'></a>";}?></p>
        <p><?php echo $disclaimer;?></p>
		<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>
		</div>
		<div class="clear"></div>
		</div>
		</div>
		<div class="clear"></div>
</body>
</html>