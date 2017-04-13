<form method='post'>
<input type='text' name='source' placeholder='temp5'>
<input type='submit' value='Convert'>
</form>

<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{											
    $source=$_POST['source'];  
	
 include("getsource.php");

//open file and get data
$data = file_get_contents($source."temp.moose");
$fbflag = 0;

if (file_exists($source."images/facebook.png")) 
		{
		$fbflag = 1;
		echo "images folder found<br>";
	    }
else if(file_exists($source."img/facebook.png")) 
		{
		$fbflag = 2;
		echo "img folder found<Br>";
		} 
else	
		{
		echo "Moving images<br>";
		$fbflag = 0;
		}
 
 
 // do tag replacements or whatever you want
$string = $data;
$data =	preg_replace('#(<title.*?>).*?(</title>)#', '<title>Welcome to <?php echo $domain_name; ?></title>', $string);
$data =	preg_replace('#(<p id=\'copyright\'.*?>).*?(</p>)#', '<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>', $data);
$data =	preg_replace('#(<p id=\'disclaimer\'.*?>).*?(</p>)#', '<p><?php echo $disclaimer;?></p>', $data);
if($fbflag == 1){
$data =	preg_replace('#(<a id=\'facebooklink\'.*?>).*?(</a>)#', '<?php if(isset($facebooklink)){echo "<a href=\'$facebooklink\'><img src=\'".$root."images/facebook.png\'></a>";}?>', $data);
$data =	preg_replace('#(<a id=\'twitterlink\'.*?>).*?(</a>)#', '<?php if(isset($twitterlink)){echo "<a href=\'$twitterlink\'><img src=\'".$root."images/twitter.png\'></a>";}?>', $data);
}
elseif($fbflag == 2){
$data =	preg_replace('#(<a id=\'facebooklink\'.*?>).*?(</a>)#', '<?php if(isset($facebooklink)){echo "<a href=\'$facebooklink\'><img src=\'".$root."img/facebook.png\'></a>";}?>', $data);
$data =	preg_replace('#(<a id=\'twitterlink\'.*?>).*?(</a>)#', '<?php if(isset($twitterlink)){echo "<a href=\'$twitterlink\'><img src=\'".$root."img/twitter.png\'></a>";}?>', $data);
}
else {
$data =	preg_replace('#(<a id=\'facebooklink\'.*?>).*?(</a>)#', '<?php if(isset($facebooklink)){echo "<a href=\'$facebooklink\'><img src=\'".$root."facebook.png\'></a>";}?>', $data);
$data =	preg_replace('#(<a id=\'twitterlink\'.*?>).*?(</a>)#', '<?php if(isset($twitterlink)){echo "<a href=\'$twitterlink\'><img src=\'".$root."twitter.png\'></a>";}?>', $data);
}
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
<?php
//Copying the twitter to the file

$file = 'twitter.png';
$newfile = $source.'twitter.png';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
else {
echo "<br><br>Successfully copied the files.";
}
?>

<?php
//Copying the facebook to the file

$file = 'facebook.png';
$newfile = $source.'facebook.png';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
else {
echo "<br><br>Successfully copied the files.";
}


}
?>