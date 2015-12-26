<?php
session_start();
$var;
require 'sqlregistration.php';
$current_file=$_SERVER['SCRIPT_NAME'];

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
	//echo'you\'re logged in!.<a href="logout.php">LOG OUT!</a>';
	$login=$_SESSION['var']=1;
	header("location:userpage.php");
}
else
{
	header("location:login2.php");
}

?>