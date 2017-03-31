<?php 

function addlog($username, $activity){

$time_add = date('Y-m-d H:i:s', strtotime('+0 years'));
$ip = $_SERVER['REMOTE_ADDR'];
$arr1 = array("Username", "Activity",  "IP", "Time_added");
$arr2 = array($username, $activity, $ip, $time_add);

insertdb("log", $arr1, $arr2);
}