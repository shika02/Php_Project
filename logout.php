<?php
//require 'new1.php';
session_start();
 $ovar;
 $log=$_SESSION['ovar']=0;
session_destroy();
echo $log;
header("location:mainpage.php");
?>