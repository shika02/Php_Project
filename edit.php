<?php
require 'sqlregistration.php';
if(isset($_GET['ed']))
{
	$id= $_GET['ed'];
	$res=mysql_query(" SELECT  * FROM registration WHERE id='$id'");
	$row=mysql_fetch_array($res);
}
	if(isset($_POST['newname'])&&isset($_POST['newemail'])&&isset($_POST['newphone'])&&isset($_POST['newgender']))
	{
	
		$newname= $_POST['newname'];
		$newe= $_POST['newemail'];
		$newp= $_POST['newphone'];
		$newg= $_POST['newgender'];
		$id= $_POST['id'];
	
	$sql= " UPDATE registration SET FirstName='$newname',gender='$newg',phno='$newp', email='$newe'WHERE id ='$id'";
	$result=mysql_query($sql) or die("could not connect!".mysql_error());
	
		if(isset($_POST['up']))
		{
			header("location:http://localhost/project/showdatabase.php");
		}
		
	}	
	
?>

<form action="edit.php" method="POST">
NAME:<br><input type="text" name="newname" value= "<?php echo  $row['FirstName'];?>" > <br><br>   
E-MAIL:<br><input type="text" name="newemail" value="<?php echo $row['email'];?>"><br><br>
PHONENO:<br><input type="bigint" name="newphone" value="<?php echo $row['phno'];?>"><br><br>
GENDER:<br><input type="text" name="newgender" value="<?php echo $row['gender'];?>"><br><br>
<input type="hidden" name="id" value="<?php echo $row['id'];?>"><br><br>
<input type="submit" name='up'value="update" >

</form>
