<!doctype html>
<html lang="en">
<meta character="UTF-8">
<link rel="stylesheet" type="text/css" href="adi.css"/>
<link rel="stylesheet" href="animate.css"/>
<head>
<title>CAR SERVICING CENTRE</title>
</head>
<body>
<div id="container">
<header>

<a href="frontpage.php"><font color="white">HOME</font>&nbsp;&nbsp;&nbsp;</a>
<a href=""><font color="white">CONTACTUS</font>&nbsp;&nbsp;&nbsp;</a>
<a href="staticservice.html" ><font color="white">SERVICES</font>&nbsp;&nbsp;&nbsp;</a>
<a href="viewdetails.php"><font color="white">VIEW_DETAILS</font></a>
<a href="logout.php"><font color="white">LOGOUT!</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>



<?php
session_start();
//require 'new1.php';
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

?>
<p><a href="adminlogin.php"><font color="white">AdminLogin!</font>&nbsp;&nbsp;</a>
<a href="login2.php"><font color="white">UserLogin!</font></a></p>
</header>
<div class="banner animated slideInUp">
</div>
<div class="content animated fadeInRight">
A motor vehicle service is a series of maintenance procedures carried out at a set time interval or after the vehicle has travelled a certain distance. The service intervals are specified by the vehicle manufacturer in a service schedule and some modern cars display the due date for the next service electronically on the instrument panel.

The completed services are usually recorded in a service book which is rubber stamped by the service centre upon completion of each service. A complete service history usually adds to the resale value of a vehicle.
</br></br>

<p2>
COPYRIGHT ©Shikha Kaushik 
</p2>

</div>

<div id="foot">
</div>
</div>
</body>
</html>