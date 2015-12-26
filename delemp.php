<?php
require 'sqlregistration.php';
if(isset($_GET['del']))
{
	$id= $_GET['del'];
	$res=mysql_query("DELETE FROM employee_details WHERE e_id='$id'");
	if($res)
	{
		echo'deleted successfully!';
		header("location:http://localhost/project/employee.php");
	}
	else
	{
		die("cannot delete!".mysql_error());
	}
}
?>