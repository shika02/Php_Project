<?php
require 'sqlregistration.php';
if(isset($_GET['ed']))
{
	$id= $_GET['ed'];
	$res=mysql_query("SELECT * FROM employee_details WHERE e_id='$id'");
	$row=mysql_fetch_array($res);
}
	if(isset($_POST['newname'])&&isset($_POST['newlast'])&&isset($_POST['newno'])&&isset($_POST['newaddress'])&&isset($_POST['specification'])&&isset($_POST['newsalary']))
	{
	
		$newname= $_POST['newname'];
		$newlast= $_POST['newlast'];
		$newno= $_POST['newno'];
		$newaddress= $_POST['newaddress'];
		$specification= $_POST['specification'];
		$newsalary= $_POST['newsalary'];
		$id=$_POST['id'];
	
	$sql= " UPDATE employee_details SET e_name='$newname',e_lastname='$newlast',e_contactno='$newno', e_address='$newaddress',e_specification='$specification', e_salary='$newsalary' WHERE e_id ='$id'";
	$result=mysql_query($sql) or die("could not connect!".mysql_error());
	
		if(isset($_POST['up']))
		{
			header("location:http://localhost/project/employee.php");
		}
		
	}	
	
?>

<form action="editemp.php" method="POST">
NAME:<br><input type="text" name="newname" value= "<?php echo  $row['e_name'];?>" > <br><br>   
LAST_NAME:<br><input type="text" name="newlast" value="<?php echo $row['e_lastname'];?>"><br><br>
CONTACT_NO:<br><input type="bigint" name="newno" value="<?php echo $row['e_contactno'];?>"><br><br>
ADDRESS:<br><input type="text" name="newaddress" value="<?php echo $row['e_address'];?>"><br><br>
Specification:<br><input type="text" name="specification" value="<?php echo $row['e_specification'];?>"><br><br>
Salary:<br><input type="text" name="newsalary" value="<?php echo $row['e_salary'];?>"><br><br>
<input type="hidden" name="id" value="<?php echo $row['e_id'];?>"><br><br>
<input type="submit" name='up'value="update">


</form>
