<?php
require 'sqlregistration.php';
if(isset($_GET['ed']))
{
	$id= $_GET['ed'];
	$res=mysql_query(" SELECT  * FROM registration WHERE id='$id'");
	$row=mysql_fetch_array($res);
}
	if(isset($_POST['newname'])&&isset($_POST['newemail'])&&isset($_POST['newphone'])&&isset($_POST['newgender'])
	&&isset($_POST['newadd'])&&isset($_POST['newcity'])&&isset($_POST['newstate']))
	{
	
		$newname= $_POST['newname'];
		$newe= $_POST['newemail'];
		$newp= $_POST['newphone'];
		$newg= $_POST['newgender'];
		$ad=$_POST['newadd'];
		$c=$_POST['newcity'];
		$s=$_POST['newstate'];
		$id= $_POST['id'];
	
	$sql= " UPDATE registration SET FirstName='$newname',gender='$newg',phno='$newp', email='$newe'
	, Address='$ad',City='$c',State='$s' WHERE id ='$id'";

	$result=mysql_query($sql) or die("could not connect!".mysql_error());

	
		if(isset($_POST['up']))
		{
			header("location:http://localhost/img/v.php");
		}
		
	}	
	if(isset($_POST['back']))
{
  header("location:v.php");
}
	
?>

<form action="editpersonal.php" method="POST">
NAME:<br><input type="text" name="newname" value= "<?php echo  $row['FirstName'];?>" > <br><br>   
E-MAIL:<br><input type="text" name="newemail" value="<?php echo $row['email'];?>"><br><br>
PHONENO:<br><input type="bigint" name="newphone" value="<?php echo $row['phno'];?>"><br><br>
GENDER:<br><input type="text" name="newgender" value="<?php echo $row['gender'];?>"><br><br>
ADDRESS:<br><input type="text" name="newadd" value="<?php echo $row['Address'];?>"><br><br>
CITY:<br><input type="text" name="newcity" value="<?php echo $row['City'];?>"><br><br>
STATE:<br><input type="text" name="newstate" value="<?php echo $row['State'];?>"><br><br>
<input type="hidden" name="id" value="<?php echo $row['id'];?>"><br><br>
<input type="submit" name='up'value="update" >
<input type="submit" name="back" value="back_home">

</form>
