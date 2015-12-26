<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
body{
font-size:20px;
font-style:oblique;
color:white;
background-image:url("images/whitelambo (2).jpg");
background-repeat:no-repeat;
background-position:left top;
background-size: 100%;
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  text-align: left;
}
h1{
color:pink;
font-size:40px;
text-align:left;
}
p{
  color:red;
}
</style>
</head>
<body>
<h1>REGISTRATION FORM</h1><br>
<p>* fields required</p>
<br>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
Username:<input type="text" name="usern">
<span class="error"><font color="red">*</font></span>
Password:<input type="password" name="pass">
<span class="error"><font color="red">*</font></span>
<br><br>
FirstName: <input type="text"name="name">
<span class="error"><font color="red">*</font></span>
<br><br>
LastName:<input type="text" name="lname">
<span class="error"><font color="red">*</font></span>
<br><br>
Email:<input type="email" name="email">
<span class="error"><font color="red">*</font></span>
<br><br>
Phone no:<input type="tel" name="phoneno" max="10" min="10">
<span class="error"><font color="red">*</font></span>
<br><br>
Address:<input type="text"  name="addr">
<span class="error"><font color="red">*</font></span>
<br><br>
City:<input type="text" name="city">
<span class="error"><font color="red">*</font></span>
<br><br>
State:<input type="text" name="state">
<span class="error"><font color="red">*</font></span>
<br><br>
<label>Comment: <textarea name="comment" rows="5" cols="30"></textarea>
<br><br>
Gender:<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<br><br>
<input type="submit" name="submit" value="SUBMIT">
<?php
require 'sqlregistration.php';
// define variables and set to empty values
/*$name = $email = $gender = $comment = $phoneno ="";
$nameErr=$emailErr=$genderErr=$phoneErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phoneno = test_input($_POST["phoneno"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phoneno'])&&isset($_POST['usern'])&&isset($_POST['pass'])&&isset($_POST['addr'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['gender']))
 {
  $user_name=$_POST['name'];
  $user_email=$_POST['email'];
  $user_phoneno=$_POST['phoneno'];
  $user_gender=$_POST['gender'];
  $u_city=$_POST['city'];
  $u_state=$_POST['state'];
  $u_address=$_POST['addr'];
  $u_lstname=$_POST['lname'];
  $u_username=$_POST['usern'];
  $u_password=$_POST['pass'];
 // $u_pasd=md5($u_password);
// $name = mysql_real_escape_string($name);
  //$email = mysql_real_escape_string($email);
if(!empty($user_name)&&!empty($user_email)&&!empty($user_phoneno)&&!empty($u_state)&&!empty($u_username)&&!empty($u_password)&&!empty($u_city)&&!empty($u_lstname)&&!empty($u_address))
  {
	//$query="INSERT INTO 'registration' VALUES  ('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."')";
	//$query= " INSERT INTO 'registration' VALUES ('','$name','$email',$phoneno) ";
		$query="INSERT INTO registration (id,username,password,FirstName,LastName,email,phno,Address,City,State,gender)
     VALUES ('','$u_username','$u_password','$user_name','$u_lstname','$user_email','$user_phoneno','$u_address','$u_city','$u_state','$user_gender')";
			$run=mysql_query($query);
				if(!$run)
				{

			die('\ncould not enter data:'.' '.mysql_error());
				}

			//echo 'entered successfully\n';
   }
   else
   {
    echo "All the fields are required!";
  }
}
   
?>
</form>
</body>
</html>
