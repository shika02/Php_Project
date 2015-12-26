<?php
require 'sqlregistration.php';
if(isset($_GET['del']))
{
	$id= $_GET['del'];
	$res=mysql_query("DELETE FROM registration WHERE id='$id'");
	if($res)
	{
		echo'deleted successfully!';
		header("location:http://localhost/project/showdatabase.php");
	}
	else
	{
		die("cannot delete!".mysql_error());
	}
}
?>