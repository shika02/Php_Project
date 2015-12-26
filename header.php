<!doctype html>
<html lang="en">
<meta character="UTF-8">
<link rel="stylesheet" type="text/css" href="styleddd.css"/>
<link rel="stylesheet" href="animate.css"/>
<head>
<title>CAR SERVICING CENTRE</title>
</head>
<body>
<div id="container">

<header>

</header>

<div id="screen">
<a href="mainpage.php"><font color="white">HOME</font>&nbsp;&nbsp;&nbsp;</a>
<a href="contactus.php"><font color="white">CONTACTUS</font>&nbsp;&nbsp;&nbsp;</a>
<a href="staticservice.php" ><font color="white">SERVICES</font>&nbsp;&nbsp;&nbsp;</a>
<a href="aboutus.php"><font color="white">AboutUs</font>&nbsp;&nbsp;&nbsp;</a>
<a href="logout.php"><font color="white">LOGOUT!</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>


<?php
session_start();
//require 'new1.php' wait i'm not seeing..;

if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
$log=$_SESSION['var'];
//echo $log;<a href="#">Movies <span class="arrow">&#9660;</span></a>
//$login=$_SESSION['log'];
if($log)

{
	
	//header("location:frontpage.php");
	echo " &nbsp ";
	echo " &nbsp ";
	echo " &nbsp ";
	echo "logged in!";

}
}
else
{
	//header("location:frontpage.php");
	
	//echo "logged off!";
}
if(isset($_GET['page']))
{
	$page=$_GET['page'];
}
else{
	$page="";
}
include("pag1.php");
?>

<div id="tile">
<a href="adminlogin.php"><font color="white">AdminLogin!</font>&nbsp;&nbsp;</a>
<a href="login2.php"><font color="white">UserLogin!</font></a>
</div>
</div>
