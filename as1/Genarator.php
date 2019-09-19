<?php

session_start();
$myfile = fopen("Tokens.txt", "w") or die("Unable to open file!");
//generate the csrf token
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$txt = $_SESSION['token'].",";
fwrite($myfile, $txt);
//generate the session id
$session_id = session_id();
setcookie("SesT",$session_id,time()+60*60,'/');
$txt1 = $session_id."\n";
fwrite($myfile, $txt1);
fclose($myfile);

echo $_SESSION['token'];

  ?>