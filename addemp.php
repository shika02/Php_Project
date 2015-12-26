<form action="addemp.php" method="post">
NAME:<br><input type="text" name="name"><br><br>
LAST_NAME:<br><input type="text" name="lname" ><br><br>
PHONE_NO:<br><input type="text" name="phone" ><br><br>
ADDRESS:<br><input type="text" name="addr" ><br><br>
SPECIFICATION:<br><input type="text" name="spec" ><br><br>
SALARY:<br><input type="text" name="sal" ><br><br>
<input type="submit" name="ins" value="INSERT">
</form>
<?php
require 'sqlregistration.php';
if(isset($_POST['ins']))
	{ 

if(isset($_POST['name'])&&
	isset($_POST['lname'])&&
	isset($_POST['phone'])&&
	isset($_POST['addr'])&&
	isset($_POST['spec'])&&
	isset($_POST['sal']))
 {

  $user_name=$_POST['name'];
  $user_email=$_POST['lname'];
  $user_phoneno=$_POST['phone'];
  $user_gender=$_POST['addr'];
  $u_city=$_POST['spec'];
  $u_state=$_POST['sal'];
 
 

if(!empty($user_name)&&!empty($user_email)&&!empty($user_phoneno)
	&&!empty($user_gender)&&!empty($u_city)&&!empty($u_state))
{
	
	$query ="INSERT INTO employee_details(e_id,e_name,e_lastname,e_contactno,e_address,e_specification,e_salary) VALUES
	('','$user_name','$user_email','$user_phoneno','$user_gender','$u_city','$u_state')";
		
	$run=mysql_query($query);
	

	if($run)
	{
		//echo "inserted successfully";
		header("location:employee.php");
	}
	else
	{
		die('\ncould not enter data:'.' '.mysql_error());
	}

}
}
}

?>