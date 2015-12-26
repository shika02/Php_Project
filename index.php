<!doctype html>
<html lang="en">
<meta character="UTF-8">
<link rel="stylesheet" type="text/css" href="styled.css"/>
<link rel="stylesheet" href="animate.css"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script> 
<script src="jquery.localscroll.js" type="text/javascript"></script> 
<script src="jquery.scrollTo.js" type="text/javascript"></script> 

<script type="text/javascript">
$(document).ready(function() {
  $('#screen').localScroll({duration:800});
});
</script>
 


<head>
<title>CAR SERVICING CENTRE</title>
</head>
<body>
<div id="container">
<a name="home">
<header>

</header>


<div id="screen" class="clearfix">
<a href="#home"><font color="white">HOME</font>&nbsp;&nbsp;&nbsp;</a>
<a href="#contactus"><font color="white">CONTACTUS</font>&nbsp;&nbsp;&nbsp;</a>
<a href="#staticservice" ><font color="white">SERVICES</font>&nbsp;&nbsp;&nbsp;</a>
<a href="#viewdetails"><font color="white">ABOUTUS</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>





</div>


<div id="tile">
<a href="adminlogin.php"><font color="white">Admin</font>&nbsp;</a>
<a href="login2.php"><font color="white">User</font>&nbsp;</a>
<a href="logout.php"><font color="white">Logout!</font>&nbsp;&nbsp;</a>

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
	//echo "logged in!";
	echo '<span style="color:white;text-align:center;">logged in!</span>';

}
}
else
{
	//header("location:frontpage.php");
	
	echo "logged off!";
}
if(isset($_GET['page']))
{
	$page=$_GET['page'];
}
else{
	$page="";
}

?>
</div>

<div id="banner">

	<div class="img1 slide" >
		<img src="images/lightlambo.jpg" alt="England" />
	</div>
	<div class="img2 slide" >
		<img src="images/greenlamboi.jpg" alt="image2" />
	</div>
	<div class="img3 slide">
		<img src="images/a2.jpg" alt="image3" />
	</div>
	<div class="img4 slide" >
		<img src="images/whitelambo.jpg" alt="image4" />
	</div>
	<div class="img5 slide" >
		<img src="images/sss2.jpg" alt="image5" />
	</div>


</div>
</div>
<div class="next">
<a name="contactus">
<?php
include("contactus.html");
?>
</div>


<div class="next2">
<a name="staticservice">
<?php
include("staticservice.html");
?>
</div>


</body>
</html>