<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

$mysql_db='login';
if(mysql_connect($mysql_host,$mysql_user,$mysql_password)&&mysql_select_db($mysql_db))
{
//echo 'connected successfully';
}
else
{
die(mysql_error());
}

?>