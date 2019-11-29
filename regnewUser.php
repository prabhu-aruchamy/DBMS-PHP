<?php

require "init.php";

if(isset($_POST['userid']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){

	$uid = $_POST["uid"];
    $uname = $_POST["uname"];
    $uemail = $_POST["uemail"];
	$upass = $_POST["upass"];

	$sql_u = "SELECT * FROM `uclient` WHERE u_name='$uname' ";
	$sql_e = "SELECT * FROM `uclient` WHERE u_email='$uemail' ";
	$res_u = mysqli_query($con, $sql_u);
	$res_e = mysqli_query($con, $sql_e);

	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
		 $sql = "INSERT INTO `uclient` (`u_id`, `u_name`, `u_email`, `u_password`) VALUES ('$uid', '$uname', '$uemail', '$upass');";
           $results = mysqli_query($con, $sql);
           echo 'Saved!';
           exit();
  	}

}
else{
    echo 'Fields are empty';
}


// if(mysqli_query($con,$sql)){
	
// 	echo "Registration Sucessfull";	
// }
// else{
// 	echo "Error in Registration! ".mysqli_error($con);
// }

?>