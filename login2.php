<?php
ob_start();
session_start();
require 'sqlregistration.php';
$var=1;
if(isset($_POST['SIGN']))
{
	header("location:registration.php");
}

if(isset($_POST['user']) && isset($_POST['pasd']))
{
	$u_name=$_POST['user'];
	$u_pass=$_POST['pasd'];
	//$u_password=md5($u_pass);


	if ((!empty($u_name))&&(!empty($u_pass)))
{


	$query=" SELECT  *  FROM  registration  WHERE username = '$u_name' AND password = '$u_pass' ";
	$run=mysql_query($query);
	$num_rows = mysql_num_rows($run);
	

	if($num_rows==0)
	{
		echo 'invalid username/password';
		echo'please fill sign up form to login!';
	}	

	else
	{
		$user_id=mysql_result($run, 0,'id');
		$_SESSION['user_id']=$user_id;
		header("location:new1.php");
		//echo $user_id;
		//header("location:registration.php");

				
	}
}

}

?>


<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="animate.css"/>

<style>
p{
font-style:oblique;
text-color:blue;
font-size:30px;
}
p1{
	text-decoration: underline;
}
h1{
font-size:40px;
font-style:italic;
color:red;
}
body{
background-color:gray;
background-image: url("images/g.jpg");
background-repeat: no-repeat;
background-position:right top;
text-align:center;
}
a{
	text-decoration:none;
}
.f{
	color:red;
	font-size: 40px;
}

</style>
</head>
<body>

<div class="f animated slideInLeft">SIGN IN </div>
<p>Username</p>

<form action="login2.php" method="POST">
<input type="text" name="user" placeholder="Username" /><br>
<p>Password</p>
<input type="password" name="pasd" placeholder="Password" /><br><br><br>
<input type="submit" name="submit" value="LOGIN!"  />&nbsp;&nbsp;
<input type="submit" name="SIGN" value="SIGNUP!"/>
</form>
<br><br><br>
<a href="changepass.php">Forgot Password?</a>
</body>
</html>