<?php
require 'sqlregistration.php';
session_start();
if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
$log=$_SESSION['var'];
//echo $log;
//$login=$_SESSION['log'];
if($log)
{
if(isset($_POST['sub']))
{
$rq=array();


$checkBox1 = $_POST['st'];
 $count=count($checkBox1);
for($i=0;$i<$count;$i++)
{
	$rq[$i]=$checkBox1[$i]	;
}
$ch="";
$type="";

foreach($rq as $r)
{
	$ch=$r;
	$sum=0;

	
$result = mysql_query("SELECT * FROM prices where p_id='$ch'");

	while($row = mysql_fetch_assoc($result))
	{
    	
    	
     $id= $row['p_id'];
    $type[]=$row["p_type"];
  // echo $a=implode(",",$type);
  
 	 $t[]=$row["p_amount"];
 	//echo $type=implode(",",$_POST['st']);
 	//echo $a=implode(",",$row['p_type']);
 //echo "<br/>";
}
echo "<br/>";

}
$sum=0;
$a="";
for($j=0;$j<$count;$j++)
{
$sum+=$t[$j];
}
 $a=implode(",",$type);
	
	//header("location:frontpage.php");
	//echo "you are logged in!";
	$U_id=$_SESSION['user_id'];
//echo"total amount of products is:". $sum."</br>". $U_id."</br>".$a;
   $query="INSERT into service_detail(s_id,s_type,totalamount,s_date) values('$U_id','$a','$sum',CURDATE())";
   $run=mysql_query($query);
 //  echo $log;
if($run)
{
	
	header("location:booking_det.php");

}

}
  




}


}
else
{
echo "<script>
alert('PLEASE LOGIN!');
window.location='mainpage.php';
</script>";
}
/*if(isset($_POST['subm']))
{
	header("location:pay.php");

}*/
//query to insert in a database the corresponding values ticked by user//
?>
<!doctype html>
<html>
<head>
<form action="carservices.php" method="POST" >
<link href="style.css" rel="stylesheet" type="text/css" />

<style>
h1{
	text-align: center;
	color: red;
	text-decoration: underline;
}
table, th, td {
    border: 1px solid black;
    padding: 5px;
    font: arial;
    color: white;
    text-align: left;
}
#head
{
	background: url("images/back.jpg");
	height: 70px;
	width:100%;

}
#table
{
	background: gray;
	font-size: 19px;
}
#button{
	height:50px;
	background: gray;
	text-align: center;
	text-decoration: blink;
	font-style: italic;
}
</style>
<div id ="head">
<h1><i>TYPES OF CAR SERVICES AND DETAILS</i></h1>
</div>

<div id="table">
<table border='1' width=100% >
<tr>
<th>SERVICE TYPES</th>
<th>COST</th>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="1">Replace oil filter</td><td>Rs.1000</td>
</tr>
<tr>
<tr>
<td><input type="checkbox" name="st[]" value="2">Check for engine oil leaks</td><td>Rs.500 </td>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="3">Check operation of headlights, indicators and other exterior lights</td><td>Rs.800 </td>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="4">Check vehicle horn</td><td>Rs.520</td>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="5">Check windscreen condition</td><td>Rs.1200</td>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="6">Check steering and suspension components for wear</td><td>Rs.3000</td>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="7">Check for correct clutch operation</td><td>Rs.2000</td>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="8">Replace spark plugs if applicable</td><td>Rs.1500</td>
</tr>
<tr>
<td><input type="checkbox" name="st[]" value="9">Replace air filter element</td><td>Rs.1850</td>
</tr>
<td><input type="checkbox" name="st[]" value="10">Visually inspect front brakes from inside edge of wheel</td><td>Rs.4000</td>
</tr>
<td><input type="checkbox" name="st[]" value="11">Check interior mirror condition</td><td>Rs.800</td>
</tr>
<td><input type="checkbox" name="st[]" value="12">Check HT leads, distributor cap and rotor arm for visual condition</td><td>Rs.1000</td>
</tr>
<td><input type="checkbox" name="st[]" value="13">Check prop shaft, drive shaft and joints for operation and wear</td><td>Rs.1500</td>
</tr>
<td><input type="checkbox" name="st[]" value="14">Check brake callipers, wheel cylinders, hoses and pipes for wear and leaks</td><td>Rs.6000</td>
</tr>
<td><input type="checkbox" name="st[]" value="15">Check exhaust, fixings and check for condition and leaks</td><td>Rs.560</td>
</tr>
<td><input type="checkbox" name="st[]" value="16">Check tyres for condition pressure and tread (including spare)</td><td>Rs.860</td>
</tr>
<td><input type="checkbox" name="st[]" value="17">spare parts services</td><td>Rs.10000</td>
</tr>
<td><input type="checkbox" name="st[]" value="18">simple car washing</td><td>Rs.700</td>
</tr>
<td><input type="checkbox" name="st[]" value="19">Check shock absorbers for operations and performance</td><td>Rs.2500</td>
</tr>
</table>
</div>
<div id="button">
<input type="submit" name="sub" value="SUBMITT">
<input type="submit" name="subm" value="VIEWDETAILS">

</form>
</div>
</head>

</html>