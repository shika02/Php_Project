<!doctype html>
<html lang="en">
<meta character="UTF-8">
<link rel="stylesheet" type="text/css" href="styles2.css"/>
<head>
<title>CAR SERVICING CENTRE</title>
</head>
<body>
<div id="container">
<header>
<h1>CAR SERVICE CENTRE</h1>
<p><a href="adimn">AdminLogin!</a></p>
</header>
<div>
<div id="nav">
<a href="frontpage.html">HOME&nbsp;&nbsp;&nbsp;</a>
<a href="">CUSTOMER_DETAILS&nbsp;&nbsp;&nbsp;</a>
<a href="carservices.php" >SERVICING&nbsp;&nbsp;&nbsp;</a>
<a href="login2.php">LOGIN&nbsp;&nbsp;&nbsp;</a>
<a href="showdatabase.php">VIEW_DETAILS&nbsp;&nbsp;&nbsp;</a>
<a href="logout.php">LOGOUT!&nbsp;&nbsp;&nbsp;</a>


</div>
<div id="bann">
</div>
<div id="content">
A motor vehicle service is a series of maintenance procedures carried out at a set time interval or after the vehicle has travelled a certain distance. The service intervals are specified by the vehicle manufacturer in a service schedule and some modern cars display the due date for the next service electronically on the instrument panel.

The completed services are usually recorded in a service book which is rubber stamped by the service centre upon completion of each service. A complete service history usually adds to the resale value of a vehicle.

<?php
session_start();
//require 'new1.php';
if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
$log=$_SESSION['var'];
//echo $log;
//$login=$_SESSION['log'];
if($log)
{
	
	//header("location:frontpage.php");
	echo "you are logged in!";

}
}
else
{
	//header("location:frontpage.php");
	echo "you are logged off!";
}

?>

<p>
COPYRIGHT ©Shikha Kaushik 
</p>

</div>

<div id="foot">

</div>
</div>
</body>



</html>