<?php
require 'sqlregistration.php';
if(isset($_GET['ed']))
{
	$id= $_GET['ed'];
	$res=mysql_query(" SELECT  * FROM booking_details WHERE b_id='$id'");
	$row=mysql_fetch_array($res);
}
	if(isset($_POST['status'])
		/*&&isset($_POST['wanted'])
		&&isset($_POST['model'])
		&&isset($_POST['type'])
		&&isset($_POST['status'])*/)
	{
	
		/*$newname= $_POST['newname'];
		$newe= $_POST['wanted'];
		$newp= $_POST['model'];
		$newg= $_POST['type'];*/
		$news= $_POST['status'];
		$id= $_POST['id'];
	
	$sql= " UPDATE booking_details SET 
	/*name='$newname',
	date_wanted='$newg',
	car_modelno='$newp', 
	cartype='$newe',*/
	Status='$news'
	 WHERE b_id ='$id'";
	$result=mysql_query($sql) or die("could not connect!".mysql_error());
	
		if(isset($_POST['up']))
		{
			header("location:http://localhost/img/adminbooking.php");
		}
		
	}	
	
?>

<form action="adminbookinedit.php" method="POST">
STATUS:<br><br><br><input type="text" name="status" value="<?php echo $row['Status'];?>" ><br><br>
<input type="hidden" name="id" value="<?php echo $row['b_id'];?>"><br><br>
<input type="submit" name='up'value="update" >

</form>
