<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Check Cookie</title>
</head>
<body>
	<?php
	foreach($_COOKIE as $k=>$v){
	    echo $k." ".$v."<br>";
	}
	
	echo $_SESSION["list"];
	session_start();
	echo $_SESSION["list"];
	echo "coo=".count($_COOKIE);
	?>
</body>
</html>