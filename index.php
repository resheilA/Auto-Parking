<?php 

$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
//$url = 'http://mail.google.com/dhasjkdas/sadsdds/sdda/sdads.html';
$parse = parse_url($url);
$domain_name = ucwords($parse['host']);
//echo $domain_name;


//	header("Location: /mypark/temp/temp1/web/");
include("http://localhost/mypark/temp/temp1/web/index.php?domain_name=$domain_name"); 
?>