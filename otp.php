<?php
$to = "kaushik.shikhs02@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: kaushik.shikhs02@gmail.com";

mail($to,$subject,$txt,$headers);
?>
<form action="otp.php" method="POST">
<input type="submit" name="send email">
</form>