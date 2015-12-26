<?php
require 'sqlregistartion.php';
if(isset($_POST['update']))
{
	$updatequery="UPDATE registration SET name='$_POST[name]'.email='$_POST[email]'.phone='$_POST[phone]'.gender='$_POST[gender]' WHERE id='$_POST[hidden]'";
}
$sql = SELECT * from registration;
$query=mysql_query($sql);
echo "<table border=1>
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PHONE NO</th>
<th>GENDER</th>
</tr>";
while($record=mysql_fetch_array($query)){
	echo "<form action= update.php method=post>";
	echo"<tr>";
	echo "<td>" . "<input type=text name=id value=" .$record['id'] . "</td>";

	echo "<td>" . "<input type="text" name=name value=" .$record['name'] . "</td>";

	echo "<td>" . "<input type="text" name=email value=" .$record['email'] . "</td>";

	echo "<td>" . "<input type=text name=gender value=" .$record['gender'] . "</td>";

	echo "<td>" . "<input type=text name=phone value=" .$record['phoneno'] . "</td>";
	echo "<td>" . "<input type=submit name=update value=update" ."</td>";
	echo "</form>";

}
echo "</table>";


?>