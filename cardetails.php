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
	background-image: url("images/ss1.jpg");
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
<h1><i>CAR DETAILS<i></h1>

<?php
session_start();
require 'sqlregistration.php';
if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
  	$u_id=$_SESSION['user_id'];
	$log=$_SESSION['var'];
		if($log)
		{
			if(isset($_POST['sub']))
				{

				if(isset($_POST['carname'])&&
				isset($_POST['carcolour'])&&
				isset($_POST['regno'])&&
				isset($_POST['meter'])&&
				isset($_POST['model'])&&
				isset($_POST['license']))
				{
					$name=$_POST['carname'];
					$color=$_POST['carcolour'];
					$reg=$_POST['regno'];
					$meter=$_POST['meter'];
					$model=$_POST['model'];
					$license=$_POST['license'];

						$e=mysql_query("SELECT * FROM booking_details");
						$row = mysql_fetch_array($e);
						if($row==0)
						{
							$query="INSERT INTO car_details(c_id,car_name,color,car_regno,meter_reading,car_modelno,license_no)
								 VALUES('$u_id','$name','$color','$reg','$meter','$model','$license')";
								 $ruu=mysql_query($query);
								 if($ruu)
								 	//echo"success";
								$r="INSERT INTO booking_details(id,Status,b_id,date_ser,reading_meter) VALUES
								('','pending','$u_id',CURDATE(),'$meter')";
								mysql_query($r);
								if($r)
								echo"wait for booking!";
						}
						else{
   						while($row) 
   						{

   	
							if($row["Status"]=="booked")
							{
								/*$query="INSERT INTO car_details(u_id,car_name,color,car_regno,meter_reading,car_modelno,license_no)
								 VALUES('$u_id','$name','$color','$reg','$meter','$model','$license')";
			 					$ruu=mysql_query($query);
								$r="INSERT INTO booking_details(id,Status,b_id,date_ser) VALUES('','pending','$u_id',CURDATE())";
								mysql_query($r);
							if($ruu)
								{*/
									header("location:carservices.php");
								//}
							}
							

							else if($row["Status"]=="pending")
							{
								echo"BOOKING IS PENDING!";
								break;
							}
							else
							{
								$query="INSERT INTO car_details(u_id,car_name,color,car_regno,meter_reading,car_modelno,license_no)
								 VALUES('$u_id','$name','$color','$reg','$meter','$model','$license')";
			 					$ruu=mysql_query($query);
								$r="INSERT INTO booking_details(id,Status,b_id,date_ser) VALUES('','pending','$u_id',CURDATE())";
								mysql_query($r);
							}

	
						}
					}
				}

				else
				{
				die("could not connect".mysql_error());
				}



}
}
if(isset($_POST['back']))
{
	header("location:Userpage.php");
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
<form action='cardetails.php' method='POST'><br>
CAR-NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="carname" ><br><br>
COLOR :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="carcolour" ><br><br>
CAR-REGNO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="regno" ><br><br>
METER-READING:&nbsp;&nbsp;<input type="text" name="meter" ><br><br>
CAR-MODELNO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model" ><br><br>
LICENSE-NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="license" ><br><br>
<input type="submit" name="sub" value="SUBMIT_DETAILS">
<input type="submit" name="back" value="back_home">

</form>