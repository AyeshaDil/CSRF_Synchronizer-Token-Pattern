<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['ustatus'])){
	if(token::checkToken($val,$_COOKIE['SesT'])){
		echo "<h2> Valid request: ".$_POST['ustatus']."</h2>";
		echo "<h3> Token:  ".$val."</h2>";	
		echo "<h3> Session ID:  ".$_COOKIE['SesT']."</h2>";	
	}
	else{
	   echo "<h2> Invalid request, CSRF token does not match :  ".$_POST['ustatus']."</h2>";
	}
}
?>