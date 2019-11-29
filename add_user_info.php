
<?php

require "init.php"

$userid = $_POST["userid"];
$name = $_POST["name"];

$sql = "insert into client(u_id,u_name) values('$userid','$name');";

if(mysqli_query($con,$sql)){
	
	echo "<br><h3>One User Data Inserted!</h3>";	
}
else{
	echo "Error in Insertion! ".mysqli_error($con);
}
	

?>