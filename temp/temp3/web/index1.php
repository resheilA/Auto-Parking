<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
 
<?php  


if(isset($_GET['domain_name'])){$domain_name = $_GET['domain_name'];}else{$domain_name = "Moose";}
if(isset($_GET['temp'])){$theme = $_GET['temp'];}else{$theme = "temp1";}

$root = "/mypark/temp/$theme/web/";

include("siteroot.php");
include_once($SITEROOT."/modules/database/connectdb.php");
include_once($SITEROOT."/modules/getwebdetails.php");

$facebooklink = getfblink($domain_name);
$twitterlink = gettwitterlink($domain_name);
$disclaimer = getdisclaimer();
?>
<!DOCTYPE HTML>
	<head>
		<title>Welcome to <?php echo $domain_name; ?></title>
		<link href="<?php echo $root; ?>css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
	     <script src="<?php echo $root; ?>js/countdown.js" type="text/javascript"></script>	
	     <script src="<?php echo $root; ?>js/init.js" type="text/javascript"></script>
	</head>
	<body>
		<!---start-wrap---->
			<div class="header">
				<div class="wrap">
					<div class="logo" ><p><?php echo $domain_name; ?></p></div>
				</div>
		</div>
		<!---start-content---->
		<div class="content">
			<div class="content-info">
				<h1>Our new, <span>AWESOME WEBSIT</span>E is almost ready. We are launching soon</h1>
			</div>
			<!---start-count-down-timer
			<ul id="countdown">
					<li>
						<span class="days">487</span>
						<h3>Days</h3>
					</li>
					<li>
						<span class="hours">21</span>
						<h3>hours</h3>
					</li>
					<li>
						<span class="minutes">22</span>
						<h3>minutes</h3>
					</li>
					<li>
						<span class="seconds">44</span>
						<h3>seconds</h3>
					</li>	
				</ul>
			<!---End-count-down-timer---->
			<!----start---notify-form
			<div class="notify">
				<h3>Please sign-up for our newsletter to get notified</h3>
				<form>
					<input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<!----start---notify-form---->
			<!---start-social-icons---->
			<div class="social-icons">
				<h3>Catch on</h3>
				<ul>
					<li><?php if(isset($facebooklink)){echo "<a href='$facebooklink'><img src='$root/images/facebook.png'></a>";}?></li>
					<li><?php if(isset($twitterlink)){echo "<a href='$twitterlink'><img src='$root/images/twitter.png'></a>";}?></li>
				</ul>
			</div>
			<!---End-social-icons---->
			<!---start-copy-right---->
			<div class="copy-right">
		         <p><?php echo $disclaimer;?></p>	
				<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>
			</div>
			<!---End-copy-right---->
		</div>
		<!---End-content---->
		<!---End-wrap---->
	</body>
</html>

