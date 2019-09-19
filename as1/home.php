<?php
if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'csrf'){
		echo '<h3>Successfully logged in</h3>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
else{
	header('Location:./login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	$(document).ready(function(){

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("t_value").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "Genarator.php", true);
	xhttp.send();
	
	});
</script>
</head>

<body>
<div class="login">
			<h1>Create post</h1>
			<form action="display.php" method="post">
				
                <input type="text" name="ustatus" placeholder="Type something!" id="ustatus">
                <input type="hidden" name="token" value="" id="t_value"/>
				<input type="submit" value="Share">
			</form>
		</div>

</html>