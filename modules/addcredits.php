<?php 
function addcredits($username, $credits){
update("user", "Allowed", $credits, "Username = '$username'");
}