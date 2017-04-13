<?php

    include ("siteroot.php");
    $source = $SITEROOT."/temp/$source/web/";
	
	// Open a webpage
    $homepage = file_get_contents($source."index.html");
    // echo the homepage to see the content.
    
    // Set the filename
    $file = $source.'temp.moose';
    // Write the contents back to the file
    file_put_contents($file, $homepage);
?>
