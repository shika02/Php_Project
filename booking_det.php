<!doctype html>
<html lang="en">
<head>
<meta character="UTF-8">
<style>
body{
	text-align:center;
	background-color: #787878 ;
	background-image: url("images/backg.jpg");
}

h1{
	color:red;
}
<title>DETAILS</title>
</style>
</head>
<body>
<h1><i>BOOKING DETAILS</i></h1>
<?php
require 'sqlregistration.php';
session_start();
if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
  $u_id=$_SESSION['user_id'];
$log=$_SESSION['var'];
if($log)
{
$query="SELECT * from booking_details,service_detail where
booking_details.b_id='$u_id' and service_detail.s_id='$u_id'";
  $run = mysql_query($query);
  
    if (($result=mysql_num_rows($run)>0))
    {
      $row = mysql_fetch_assoc($run);
        echo "<table border='1' style='width:100%'>";
        echo "<tr><th>BOOKING DETAILS</th></tr>";

      while($row)
      
      {
              echo "<tr><th>DATE</th><td> ".$row["date_ser"]."</td></tr><tr><th>BOOKING_STATUS</th><td>".$row["Status"]."</td></tr>";
             
              break;

echo "</table>";

}

while($row)

           {

  
     echo "<table border='1' style='width:100%'>";
            echo "<tr><th>SERVICE DETAILS ON:</th><td>".$row["s_date"]."</td></tr><br><br><br>";

    	        echo"<tr><th>SERVICETYPE</th>
              <td>".$row["s_type"]."</td></tr><tr><th>TOTALAMOUNT</th><td>".$row["totalamount"]."</td></tr>";
              
              break;

    	
    }

  
}
else{
  echo"no records  ";
}
echo "</table>"; 

}

if(isset($_POST['sub']))
{
  if (($result=mysql_num_rows($run) ==0))
  {
    echo "no booking and amount to be paid!";
  
  }
  else{
    header("location:card.php");

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
if(isset($_POST['back']))
{
  header("location:Userpage.php");
}


?>	

</body>
</html>
<form action='booking_det.php' method='POST'><br>
<input type="submit" name="sub" value="PAY">
<input type="submit" name="back" value="back_home">
</form>