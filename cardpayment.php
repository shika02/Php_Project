<!doctype html>
<html lang="en">
<head>
<meta character="UTF-8">
<style>
body{
  text-align:center;
  background-color: #787878 ;
  background-image: url("images/o.jpg");
  //background-repeat:no-repeat;
  //background-position:center;
  font-size: 30px;
  color: black;

}
h1{
  color:gray;
  font-size: 40px;
}
</style>
</head>
<body>
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
if(isset($_POST['card'])&&
	isset($_POST['name'])&&
	isset($_POST['expiry'])&&
	isset($_POST['cvv']))
{
	if(!empty($_POST['card'])&& !empty($_POST['name'])&& !empty($_POST['expiry'])&& !empty($_POST['cvv']))
	{
	$cardno=$_POST['card'];
	$nam=$_POST['name'];
	$expdate=$_POST['expiry'];
	$cv=$_POST['cvv'];

	
		$query="INSERT INTO card_details (card_no,name_card,expiry_date,cvv_no,submit_status) VALUES
		('$cardno','$nam','$expdate','$cv','paid')";
		/*$rr="INSERT INTO payment_dtails(bill_id,disc_amount,total_amount,bill_date,bill_status) VALUES
		('$u_id','no_discount',,CURDATE(),'paid')";*/
	
	$run=mysql_query($query);
	if($run)
	{
	
		$s="select * from service_detail where s_id='$u_id' and s_date=CURDATE()";
		$j=mysql_query($s);
		if($j)
		{
			if (($result=mysql_num_rows($j)>0))
				{
					while($row = mysql_fetch_assoc($j))
					{
						
					
					$p="INSERT INTO payment_dtails
			 		(bill_id,disc_amount,total_amount,bill_date,bill_status) 
			 			VALUES('$u_id','no discount','$row[totalamount]','$row[s_date]','paid')";
			 			$t=mysql_query($p);
			 			if($p)
			 				{
			 					echo"PAYMENT SUCCESSFUL!";
			 				}
			 		}
				}	
		}
	}
	else
		{
			echo "not executed";
		}

}
else
{
	echo "please fill all details:";
}
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
<h1>CARD_DETAILS</h1>
<form action="cardpayment.php" method="POST">
BANK_NAME:<input type="text" name="bank"><br><br>
CARD_NO:<input type="text" name="card"><br><br>
NAME_ON_CARD:<input type="text" name="name"><br><br>
EXPIRY_DATE:<input type="date" name="expiry"><br><br>
CVV_NO:<input type="text" name="cvv"><br><br>
<input type="submit" value="SUBMIT" name="sub">
</form>
</body>
</html>