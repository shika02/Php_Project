<!doctype html>
<html lang="en">
<head>
<h1>PAYMENT DETAILS</h1>
<style>
table, th, td {
    border: 1px solid black;
   // border-collapse: collapse;
}
<style>
body{
	text-align: left;
	font-size: 20px;
	//text-decoration: underline;
	background-image: url("s/w.jpg");
	}
h1{
	background: blue;
	font: italic;
	color:white;
}
</style>

<?php
require 'sqlregistration.php';
/*session_start();
if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
  $u_id=$_SESSION['user_id'];
$log=$_SESSION['var'];
if($log)
{*/
$query="SELECT * FROM registration,payment_dtails,service_detail" ;
  
if($run=mysql_query($query))
{

	while($num_rows=mysql_fetch_assoc($run))
	{
		$name=$num_rows['username'];
		$type=$num_rows['s_type'];
		$amt=$num_rows['total_amount'];
		$dt=$num_rows['bill_date'];
		$st=$num_rows['bill_status'];
		$bid=$num_rows['bill_id'];
		echo
		"<table border='1' style='width:100%'>
		<tr><th>Bill_id:</th><td>$bid</td></tr>
		<tr><th>NAME:</th><td>$name</td></tr>
		<tr><th>Service_Type</th><td>$type</td></tr>
		<tr><th>Service_Amount</th><td>$amt</td></tr>
		<tr><th>DATE:</th><td>$dt</td></tr>
		<tr><th>Bill_Status:</th><td>$st</td></tr>

		</table>";
		break;
		//echo $type;
		//echo $amt;
		
	}
	 

}

else{
	 die("could not connect sorry!".mysql_error());
}


?>
</head>
</html>
