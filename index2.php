<?php
require 'sqlregistration.php';
require 'core.php';
if(loggedin()){
	echo 'you\'re logged in. <a href ="logout.php">LogOut</a>';
}
else{
	include 'login.php';
	
}
?>