
<?php
 
 include("getsource.php");

//open file and get data
$data = file_get_contents($source."temp.moose");

// do tag replacements or whatever you want
$string = $data;
$data =	preg_replace('#(<title.*?>).*?(</title>)#', '<title>Welcome to <?php echo $domain_name; ?></title>', $string);
$data =	preg_replace('#(<p id=\'copyright\'.*?>).*?(</p>)#', '<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>', $data);
$data =	preg_replace('#(<p id=\'disclaimer\'.*?>).*?(</p>)#', '<p><?php echo $disclaimer;?></p>', $data);
$data =	preg_replace('#(<a id=\'facebooklink\'.*?>).*?(</a>)#', '<?php if(isset($facebooklink)){echo "<a href=\'$facebooklink\'><img src=\'$root/images/facebook.png\'></a>";}?>', $data);
$data =	preg_replace('#(<a id=\'twitterlink\'.*?>).*?(</a>)#', '<?php if(isset($twitterlink)){echo "<a href=\'$twitterlink\'><img src=\'$root/images/twitter.png\'></a>";}?>', $data);
$data =	preg_replace('#(<h1 id=\'websitename\'.*?>).*?(</h1>)#', '<h1><?php echo $domain_name; ?></h1>', $data);		
$data =	preg_replace('#(<p id=\'websitename\'.*?>).*?(</p>)#', '<p><?php echo $domain_name; ?></p>', $data);		
$data =	preg_replace('#(<img src="img.*?>).*?(?>)#', '<img src="<?php echo $root; ?>', $data);		
$data =	preg_replace('#(<link href="css.*?>).*?(?>)#', '<link href="<?php echo $root; ?>', $data);		
$data =	preg_replace('#(<script src="js.*?>).*?(?>)#', ' <script src="<?php echo $root; ?>', $data);		
$data =	preg_replace('#(<script src="js.*?>).*?(?>)#', ' <script src="<?php echo $root; ?>', $data);	


$data =	preg_replace('#(<php.*?>).*?(</php>)#', ' 
<?php  


if(isset($_GET[\'domain_name\'])){$domain_name = $_GET[\'domain_name\'];}else{$domain_name = "Moose";}
if(isset($_GET[\'theme\'])){$theme = $_GET[\'theme\'];}else{$theme = "temp1";}

$root = "/mypark/temp/$theme/web/";

include("siteroot.php");
include_once($SITEROOT."/modules/database/connectdb.php");
include_once($SITEROOT."/modules/getwebdetails.php");

$facebooklink = getfblink($domain_name);
$twitterlink = gettwitterlink($domain_name);
$disclaimer = getdisclaimer();
?>', $data);		
	
//save it back:
file_put_contents($source."index1.php", $data);

echo "Successfully made changes in the display file.";
?>
<?php
//Copying the site root to the file

$file = 'copysiteroot.php';
$newfile = $source.'siteroot.php';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
else {
echo "<br><br>Successfully copied the files.";
}
?>