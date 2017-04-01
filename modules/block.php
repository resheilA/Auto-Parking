<?php 
function blockuser($username){
update("user", "Blocked", "1", "Username = '$username'");
}


function unblockuser($username){
update("user", "Blocked", "0", "Username = '$username'");
}


function blockdomain($domainame){
update("domain_added", "Blocked", "1", "domain_name = '$domainame'");
}


function unblockdomain($domainame){
update("domain_added", "Blocked", "0", "domain_name = '$domainame'");
}
