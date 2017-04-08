
<?php
 
 include("getsource.php");

//open file and get data
$data = file_get_contents($source."temp.moose");

// do tag replacements or whatever you want
$string = $data;
$data =	preg_replace('#(<title.*?>).*?(</title>)#', '<title>Welcome to <?php echo $domain_name; ?></title>', $string);
$data =	preg_replace('#(<p id=\'copyright\'.*?>).*?(</p>)#', '<p>Copyright &copy <?php echo $domain_name; ?>&nbspTemplate by <a href="http://w3layouts.com"> w3layouts.com</a><br>Developed By Moose</p>', $data);
$data =	preg_replace('#(<p id=\'disclaimer\'.*?>).*?(</p>)#', '<p>We we have disclaimer here</p>', $data);
$data =	preg_replace('#(<a id=\'facebooklink\'.*?>).*?(</a>)#', '<a href=\'webportal.in\'><img src="images/facebook.png" title=""></a>', $data);
$data =	preg_replace('#(<a id=\'twitterlink\'.*?>).*?(</a>)#', '<a href=\'webportal.in\'><img src="images/twitter.png" title=""></a>', $data);
$data =	preg_replace('#(<h1 id=\'websitename\'.*?>).*?(</h1>)#', '<h1>Webportal.in</h1>', $data);		
$data =	preg_replace('#(<p id=\'websitename\'.*?>).*?(</p>)#', '<p>Webportal.in</p>', $data);		
		
		
//save it back:
file_put_contents($source."index.php", $data);

?>