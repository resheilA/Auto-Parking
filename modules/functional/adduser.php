<?php 

function adduser($username, $password){

$password = md5($password);
$time_add = date('Y-m-d H:i:s', strtotime('+0 years'));
$arr1 = array("Username", "Password", "Added_on", "Block");
$arr2 = array($username, $password, $time_add, 0);

insertdb("user", $arr1, $arr2);
}
