<?php
ob_start();
session_start();
require 'sqlregistration.php';
$var=1;
if(isset($_POST['submit']))
{
if(isset($_POST['user']) && isset($_POST['pasd']))
{
	$u_name=$_POST['user'];
	$u_pass=$_POST['pasd'];
	//$u_password=md5($u_pass);


	if ((!empty($u_name))&&(!empty($u_pass)))
{


	$query=" SELECT  username,password  FROM  adimin WHERE username = 'u_name' AND password = 'u_pass' ";
	$run=mysql_query($query);
	$num_rows = mysql_num_rows($run);
	

	if(($u_name='shikha') && ($u_pass=='password123'))
	{
		header("location:admin.php");
		
	}	

	else
	{
	
			echo 'invalid username/password';
			
	}
}
else
{
	echo "please enter username and password!";
}

}

}
if(isset($_POST['submi']))
{
	header("location:mainpage.php");
}
?>


<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="animate.css"/>

<style>
p{
font-style:bold;
color:#CEF6F5;
font-size:30px;
}
body{
background-image: url("images/kk.jpg");
background-repeat: no-repeat;
text-align:center;
width: 100%;
color:red;

}
.sign{
	font-size: 40px;
	color:#04B404;



}
</style>
</head>
<body>

<div class="sign animated slideInLeft">SIGN IN </div>
<p>Username</p>

<form action="adminlogin.php" method="POST">

<input type="text" name="user" placeholder="Username" /><br>
<p>Password</p>
<input type="password" name="pasd" placeholder="Password" /><br><br><br>

<input type="submit" name="submit" value="ADMIN" font-size="20px" color="red" />
<input type="submit" name="submi" value="Homepage" font-size="20px" color="red" />
</form>
</body>
</html>