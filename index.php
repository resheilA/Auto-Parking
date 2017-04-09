<?php  

?>

<?php 

$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
//$url = 'http://mail.google.com/dhasjkdas/sadsdds/sdda/sdads.html';
$parse = parse_url($url);
$domain_name = ucwords($parse['host']);
//echo $domain_name;



include("siteroot.php");
include_once($SITEROOT."/modules/database/connectdb.php");
include_once($SITEROOT."/modules/getwebdetails.php");

$theme = gettheme($domain_name);

if(!$theme){$theme = "temp1";}
//	header("Location: /mypark/temp/temp1/web/");
include("http://localhost/mypark/temp/$theme/web/index1.php?domain_name=$domain_name&temp=$theme"); 
?>