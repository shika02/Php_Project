<!doctype html>
<html lang="en">
<head>
<meta character="UTF-8">
<link rel="stylesheet" href="styles.css"/>
<title>CAR_DETAILS</title>
</head>
<style>
body{
	text-align: left;
	font-size: 20px;
	//text-decoration: underline;
	background-image: url("images/w.jpg");
	background-image: no-repeat;
	background-size: fixed;
	font-family: italic;
}
h1{
	color: red;
	font-size: 40px;
	text-decoration: underline;
}
</style>
<body>
<h1><i>BOOKING_DETAILS<i></h1>

<?php
session_start();
require 'sqlregistration.php';
if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
  $u_id=$_SESSION['user_id'];
$log=$_SESSION['var'];
if(isset($_POST['sub']))
{
		
if(isset($_POST['name'])&&
	isset($_POST['wanted'])&&
	isset($_POST['model'])&&
	isset($_POST['type']))
	{
		if(!empty($_POST['name'])&&!empty($_POST['wanted'])&&!empty($_POST['model'])&&!empty($_POST['type']))
		{
		$Name=$_POST['name'];
		$Wanted=$_POST['wanted'];
		$Model=$_POST['model'];
		$Type=$_POST['type'];


$query="INSERT INTO booking_details(id,name,date_wanted,car_modelno,cartype,Status) VALUES('$u_id','$Name','$Wanted','$Model','$Type','pending')";
if($run=mysql_query($query))
{
	echo "Details recorded";
}
else
{
	die("could not connect".mysql_error());
}
}
else
{
		echo "<script>
alert('PLEASE FILL THE WHOLE DETAILS');
window.location='booking.php';
</script>";
}
}	
}
if(isset($_POST['viw']))
{
$e=mysql_query("SELECT * FROM booking_details");
   while($row = mysql_fetch_array($e)) 
   { 
   	
	if($row["Status"]=="booked")
	{
	header("location:cardetails.php");
	}
	else if($row["Status"]=="pending")
	{
		echo"PREVIOUS BOOKING IS PENDING!";
	}
		
	}
}
      
}
else
{
echo "<script>
alert('PLEASE LOGIN!');
window.location='login2.php';
</script>";
}


?>
</body>
</head>
</html>
<form action='booking.php' method='POST'><br>
Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" ><br><br>
DATE_WANTED:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="wanted" ><br><br>
CAR-MODELNO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model" ><br><br>
CAR-TYPE(CNG/AC):&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="type" ><br><br>
<input type="checkbox" name="car" value="GetCarFromHome">Get Car From Home<br><br>
<input type="submit" name="sub" value="SUBMIT_DETAILS">
<input type="submit" name="viw" value="Booking_Status">
</form>
