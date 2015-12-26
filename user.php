<?php
$username = $_POST["username"];
$password = $_POST["password"];

if($username&&$password)
{
	$connect = mysql_connect("localhost","root","") or die("could not connect");
	mysql_select_db("login") or die("could not find mysql server!"); 
	$query = mysql_query("SELECT * FROM users WHERE username='$username'");
	$numrows=mysql_num_rows($query);
	if($numrows!==0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$password = $row['password'];
		}
}

}
else
die("enter a username: and password:");

?>