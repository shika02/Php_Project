<!doctype html>
<html lang="en">
<head>
<meta character="UTF-8">
<style>
body{
	text-align:center;
	background-color: #787878 ;
	background-image: url("images/backg.jpg");
	//background-repeat:no-repeat;
	//background-position:center;
}
h1{
	color:red;
}
<title>DETAILS</title>
</style>
</head>
<body>
<h1><i>SERVICE DETAILS</i></h1>
<?php
require 'sqlregistration.php';
session_start();
//$query = " SELECT id,name,email FROM registration ";
if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
  $u_id=$_SESSION['user_id'];
$log=$_SESSION['var'];
if($log)
{
$query="select * from registration,service_detail where registration.id='$u_id' and s_id='$u_id'";
$run = mysql_query($query);
/*if($run)
{
	echo "your query is succesfully executed";
}
else
{
	die('\ncould not show data:'.' '.mysql_error());
}*/
  
    if (($result=mysql_num_rows($run) > 0)){

      

while($row = mysql_fetch_assoc($run))

           {

  
     echo "<table border='1' style='width:100%'>";
            echo "<tr><th>SERVICE DETAILS ON:</th><td>".$row["s_date"]."</td></tr><br><br><br>";

    	        echo"<tr><th>SERVICETYPE</th>
              <td>".$row["s_type"]."</td></tr><tr><th>TOTALAMOUNT</th><td>".$row["totalamount"]."</td></tr>
              <tr><th>DATE</th><td>".$row["s_date"]."</td></tr>";

    	
    }

  
}
echo "</table>"; 

}
}
else 
{
    
echo "<script>
alert('PLEASE LOGIN!');
window.location='mainpage.php';
</script>";

}

?>	

</body>
</html>