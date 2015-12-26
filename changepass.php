<form action="changepass.php" method="POST">
Username:<br><input type="text" name="user" placeholder="username"><br><br><br>
Password:<br><input type="password" name="pass" Placeholder="password"><br><br><br>
Confirm-Password:<br><input type="password" name="con" placeholder="confirm-password"><br><br><br>
<input type="submit" name="button" value="Change">
</form>
<?php
require 'sqlregistration.php';
if(isset($_POST['button']))
{
	$n=$_POST['user'];
	$p=$_POST['pass'];
	$c=$_POST['con'];
	if(!empty($n)&&!empty($p)&&!empty($c))
	{
		if($p==$c)
		{
			$query="UPDATE registration SET password='$p' WHERE username='$n'";
			$run=mysql_query($query);
			if($run)
			{
				echo "PASSWORD CHANGED!";
			}
			else
			{
				die("could not connect"." ".mysql_error());
			}
		}
		else
		{
			echo"please make sure password and confirm password are same!";
		}
	}
}

?>