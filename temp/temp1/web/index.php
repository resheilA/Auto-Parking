<!DOCTYPE HTML>
<?php  
/*
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
//$url = 'http://mail.google.com/dhasjkdas/sadsdds/sdda/sdads.html';
$parse = parse_url($url);
$domain_name = ucwords($parse['host']);
echo $domain_name;
*/


if(isset($_GET['domain_name'])){$domain_name = $_GET['domain_name'];}

?>

<html>
<head>
     <title>Welcome to <?php echo $domain_name; ?></title>
	<link href="/mypark/temp/temp1/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div class="content">
			<div class="wrap">
				<div class="content-grid">
			<p><img src="/mypark/temp/temp1/web/images/top.png" title=""></p>
				</div>
				<div class="grid">
		<p><img src="/mypark/temp/temp1/web/images/coming.png" title=""></p>
		<h3>We are Still Working on it.</h3>
		
		
								<div class="clear"></div>
								</div>
		<div class="clear"></div>
		<div class="footer">
			<p class="a"><a href='webportal.in'><img src="/mypark/temp/temp1/web/images/facebook.png" title=""></a><a href="#" id='twitterlink'><img src="/mypark/temp/temp1/web/images\twitter.png" title=""></a></p>
        <p>We we have disclaimer here</p>
		<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>
		</div>
		<div class="clear"></div>
		</div>
		</div>
		<div class="clear"></div>
</body>
</html>