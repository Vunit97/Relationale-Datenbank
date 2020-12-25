<!DOCTYPE html>
<html>
<body>

<?php

$servername = "localhost";
$user = "root";
$pw = "";
$daten = "witcher";

$con = new mysqli($servername, $user, $pw, $daten);

	if($con->connect_error)
	{
		die("Fehler");
	}
?> 

</body>
</html>