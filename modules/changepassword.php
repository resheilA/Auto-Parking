<?php 
function changepassword($username, $password){
connectdb();
update("user", "Password", md5($password), "Username = '$username'");
}