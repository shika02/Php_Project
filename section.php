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
<a href="?page=homepage"><font color="white">HOME</font>&nbsp;&nbsp;&nbsp;</a>
<a href="#ne"><font color="white">CONTACTUS</font>&nbsp;&nbsp;&nbsp;</a>
<a href="staticservice.html" ><font color="white">SERVICES</font>&nbsp;&nbsp;&nbsp;</a>
<a href="viewdetails.php"><font color="white">AboutUs</font>&nbsp;&nbsp;&nbsp;</a>
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

<div id="banner">

	<div class="img1 slide" >
		<img src="images/lightlambo.jpg" alt="England" />
	</div>
	<div class="img2 slide" >
		<img src="images/greenlamboi.jpg" alt="image2" />	<p class="desc">Cum sociis natoque penatibus et felis. Fusce aliquet ac, blandit quis, interdum arcu faucibus lorem, ut malesuada id, condimentum ac, laoreet</p>
	</div>
	<div class="img3 slide">
		<img src="images/a2.jpg" alt="image3" /><p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Gravida sodales. Aenean ut erat. Pellentesque eu turpis vulputate tortor et ultrices consectetuer. Etiam dapibus augue turpis, molestie elit, sit amet eleifend mauris sit amet, tellus. Praesent scelerisque feugiat.</p>
	</div>
	<div class="img4 slide" >
		<img src="images/whitelambo.jpg" alt="image4" /><p class="desc"><strong>Battlefield: Bad Company 2</strong>przenosi rozgrywkę znaną z serii Battlefield na front next-genowych konsol i PC-tów! Walka odbywa się na 8 wielkich, otwartych mapach, a na każdej z nich trzeba stosować zupełnie inną taktykę!</p>
	</div>
	<div class="img5 slide" >
		<img src="images/sss2.jpg" alt="image5" /><p class="desc"><strong>My cup! And my beloved keyboard</strong>All of them are dead now...</p>
	</div>

</div>
</div>
<section id="next">
<div class="next">
<link rel="stylesheet" type="text/css" href="c.css"/>
<body>
<style>
.photo{
	background-image:url("images/c.jpg");
	position:relative;
	top:120px;
	height:300px;
	background-repeat: no-repeat;
	width: 100%;
	background-position: center;

}
p3{
	position: relative;
	text-align: left;
	text-decoration: inherit;
	top:120px;
	color: gray;
	
}
.footer{
	position:relative;
	height:150px;
	top:150px;
	background-color:#ffffff; 
	background-image:url("images/t.jpg");
	background-repeat: no-repeat;
	background-position: center;

}
</style>

<div class="photo">
</div>
<div>
<p3>
Welcome to Audi UK.<br>
We're dedicated to giving excellent customer service, so for any questions you may have please contact our Customer Services team. <br>

You will find our Customer Services contact details, along with some other useful contacts, below.
</p3>
</div>

<div class="footer">

<div>

</body>
</div>

</section>
</body>
</html>