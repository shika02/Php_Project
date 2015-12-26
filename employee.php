<!doctype html>
<html lang="en">
<head>
<meta character="UTF-8">
<style>
body{
	text-align:center;
	background-color: #787878 ;
	background-image: url("images/background.jpg");
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
<h1><i>DETAILS OF EMPLOYEE</i></h1>
<?php
require 'sqlregistration.php';
//$query = " SELECT id,name,email FROM registration ";
$query="select * from employee_details";
$run = mysql_query($query);
if($run)
{
	//echo "your query is seuccesfully executed";
}
else
{
	die('\ncould not show data:'.' '.mysql_error());
}

if (($result=mysql_num_rows($run) > 0)){

    echo "<table border='1' style='width:100%'><tr><th>ID</th><th>Name</th></th><th>LastName</th></th></th><th>PHONE_NO</th></th></th><th>Address</th><th>Specification</th><th>SALARY</th><th>EDIT</th><th>DELETE</th></tr>";
    
   while($row = mysql_fetch_assoc($run)) 
     
    {
    	echo "<tr><td>".$row["e_id"]."</td><td>".$row["e_name"]."</td><td> ".$row["e_lastname"]."</td><td>".$row["e_contactno"]."</td><td>".$row["e_address"]."</td><td>".$row["e_specification"]."</td><td>".$row["e_salary"]."</td><td><a href='editemp.php?ed=$row[e_id]'>edit</a></td><td><a href='delemp.php?del=$row[e_id]'>delete</a>";
    	
    }

  echo "</table>"; 
}

else 
{
    echo "0 results";
}
if(isset($_POST['empsub']))
{
header("location:addemp.php");

}

?>	
<br><br><br><br><br><br>
<form action="employee.php" method="POST">
<input type="submit" name="empsub" value="ADD_EMP">
</form>

</body>
</html>