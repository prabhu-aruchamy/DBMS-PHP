
<?php

$host = "hostname";
$user = "dbusername";
$password = "password";
$db = "dbname";

$con =mysqli_connect($host,$user,$password,$db);

if(!$con){
	die("Error in Connection".mysqli_connect_error());
}
else{
	echo "<br><h3>Connection Success!</h3>"
}

?>