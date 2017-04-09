<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
 
<?php  

$root = "/mypark/temp/temp2/web/";
if(isset($_GET['domain_name'])){$domain_name = $_GET['domain_name'];}else{$domain_name = "Moose";}

include("siteroot.php");
include_once($SITEROOT."/modules/database/connectdb.php");
include_once($SITEROOT."/modules/getwebdetails.php");

$facebooklink = getfblink($domain_name);
$twitterlink = gettwitterlink($domain_name);
$disclaimer = getdisclaimer();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to <?php echo $domain_name; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $root; ?>css/style.css" rel="stylesheet" type="text/css" media="all">
 <script src="<?php echo $root; ?></script>
 <script src="<?php echo $root; ?></script>
<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<script>
	// COUNTDOWN CONFIGURATION
		$(function () {
			var targetDate = new Date("12/27/2013 09:00");
			$('.countdown').countdown({
					until: targetDate, 
					format: "DHMS",
					layout: '<ul class="clock">{d<}<li class="days"><span class="desc">{dn}</span></li>{d>}{h<}<li class="hours"><span class="desc">{hnn}</span></li>{h>}{m<}<li class="minutes"><span class="desc">{mnn}</span></li>{m>}{s<}<li class="seconds"><span class="desc">{snn}</span></li>{s>}</ul>',
					onTick: everySec,
				});
		});

		function everySec(periods) {
			$('.days').attr('class', 'days d' + 20);
			$('.hours').attr('class', 'hours h' + periods[4]);
			$('.minutes').attr('class', 'minutes m' + periods[5]);
			$('.seconds').attr('class', 'seconds s' + periods[6]);
		};
	</script>
	
<script>
/*FORM validation and div changing*/
$(document).ready(function() { 
	$('.form_div').hide();
	$('.thank_you').hide();

	$("#button-1").click( function () {
            $(this).parent().hide();
			 $('.form_div').fadeIn(1000);

         });  
                         
	$("#button-3").click( function () {
            $(this).parent().hide();
			 $('.btn-get-updates').fadeIn(1000);

         });   
    });            
</script>
</head>
 <body>	
	  <div class="main">
	  	<div class="wrap">
		<div class="header">
			<div class="logo">
				<h1><?php echo $domain_name; ?></h1>
		   </div>
	   </div>
	<div class="content">
		<!-- Count down timer 
		  <div class="countdown">
		  	<ul class="clock">
		  		<li class="days d20"><span class="desc">223</span></li>
		  		<li class="hours h20"><span class="desc">20</span></li>
		  		<li class="minutes m10"><span class="desc">10</span></li>
		  		<li class="seconds s20"><span class="desc">20</span></li>
		  		<div class="clear"></div>
		  	</ul>			
		</div>
		--->
				<h2 style="margin-top:10%;">WEBSITE IS IN UNDER CONSTRUCTION</h2>

		<div class="sub_content">
	     	<p>We are launching soon, So SIGNUP & Get Notified</p>
		 </div>
		 <!---
	   <div id="box_form">
        <div class="get_updates">
          <input type="button"  id="button-1" class="btn-get-updates" value="Get Updates !"/>
        </div>
        <div class="form_div">
          <form id="contactForm">
            <div class="text-div">
              <input type="text" name="email" id="email" class="text" value="Enter your e-mail here" onclick="this.value=''"/>
            </div>
            <div class="submit-div">
              <input type="submit" name="submit" id="submit" class="submit"  value="GO"/>
            </div>
            <div class="clear"></div>
          </form>
        </div>
     </div>
	 --->
   </div>
   <div class="page_bottom">
   	<div class="social-icons">
   		  <ul>
		      <li class="facebook"><?php if(isset($facebooklink)){echo "<a href='$facebooklink'><img src='$root/images/facebook.png'></a>";}?></li>
		      <li class="twitter"><?php if(isset($twitterlink)){echo "<a href='$twitterlink'><img src='$root/images/twitter.png'></a>";}?></li>
		      <li class="googleplus"><a  href="#" target="_blank"> </a></li>
		      <li class="contact"><a  href="#" target="_blank"> </a></li>
		      <div class="clear"></div>
	     </ul>
   	 </div>
	  <div class="copy_right">
	        <p><?php echo $disclaimer;?></p>
	        <p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>
     	</div>
     	<div class="clear"></div>
	  </div>
	</div>
   </div>
 </body>
 </html>