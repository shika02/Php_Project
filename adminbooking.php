<!doctype html>
<html lang="en">
<head>
<meta character="UTF-8">
<style>
body{
  text-align:center;
  background-color: #787878 ;
  background-image: url("images/y.jpg");
  //background-repeat:no-repeat;
  //background-position:center;
}
h1{
  color:gray;
}

<title>DETAILS</title>

</style>
</head>
<body>
<h1><i>DETAILS OF EMPLOYEE</i></h1>
<?php
require 'sqlregistration.php';
//$query = " SELECT id,name,email FROM registration ";
$query="select * from booking_details";
$run = mysql_query($query);
if($run)
{
  //echo "your query is successfully executed";
}
else
{
  die('\ncould not show data:'.' '.mysql_error());
}

if (($result=mysql_num_rows($run) > 0)){

    echo "<table border='1' style='width:100%'>
    <tr><th>ID</th>
    <th>Date</th></th>
    </th><th>Reading_meter</th>
    </th></th><th>STATUS</th>
    <th>EDIT</th></tr>";
    /*echo "<tr><td>".
          $row["id"]."</td><td>".$row["username"]."</td><td>
           ".$row["date_wanted"]."</td><td>".$row["car_modelno"].
           "</td><td>".$row["cartype"]."</td><td>".$row["Status"].
           "</td><td><a href='adminbookinedit.php?ed=$row[b_id]'>edit</a>";*/
    
   while($row = mysql_fetch_assoc($run)) 
     {
          
           echo "<tr><td>".$row["b_id"]."</td><td>"
           
           .$row["date_ser"]."</td><td>".$row["reading_meter"].
           "</td><td>".$row["Status"].
           "</td><td><a href='adminbookinedit.php?ed=$row[b_id]'>edit</a>";
   
    }

  echo "</table>"; 
}

else 
{
    echo "NO BOOKING Results";
}
if(isset($_POST['back']))
{
  header("location:admin.php");
}

?>  
<form action='adminbooking.php' method='POST'><br>
<input type="submit" name="back" value="back_home">
</form>

</body>
</html>