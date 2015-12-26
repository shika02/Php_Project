<?php
session_start();
 if(isset($_SESSION['var'])&&!empty($_SESSION['var']))
{
$log=$_SESSION['var'];
echo $log;
}
else
{
	echo "not looged in";
}
?>