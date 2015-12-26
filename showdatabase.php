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
<h1><i>DETAILS OF REGISTERED USER</i></h1>
<?php
require 'sqlregistration.php';
//$query = " SELECT id,name,email FROM registration ";
$query="select * from registration";
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

    echo "<table border='1' style='width:100%'><tr><th>ID</th><th>Name</th></th><th>EMAIL</th></th></th><th>PHONE_NO</th></th></th><th>GENDER</th><th>UPDATE</th><th>DELETE</th></tr>";
    
   while($row = mysql_fetch_assoc($run)) 
     
    {
    	

        echo "<tr><td>".$row["id"]."</td><td>".$row["FirstName"]."</td><td> ".$row["email"]."</td><td>".$row["phno"]."</td><td>".$row["gender"]."</td><td> <a href='edit.php?ed=$row[id]'>edit</a></td><td><a href='delete.php?del=$row[id]'>delete</a>";
    	
    }

  echo "</table>"; 
}

else 
{
    echo "0 results";
}
if(isset($_POST['back']))
{
  header("location:Userpage.php");
}


?>	
<form action='adminbooking.php' method='POST'><br>
<input type="submit" name="back" value="back_home">
</form>

</body>
</html>