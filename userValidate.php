<?php 
require "init.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from uclient where u_name like '$user_name' and u_pass like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "login success !!!!! Welcome user";
}
else {
echo "login not success";
}
 
?>