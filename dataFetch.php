<?php

require "init.php"

	$userid = $_POST["userid"];
    $uname = $_POST["name"];
    $uemail = $_POST["email"];
	$password = $_POST["password"];

	$sql_u = "SELECT * FROM uclient WHERE u_name='$uname'";
	$sql_e = "SELECT * FROM uclient WHERE u_email='$uemail'";
	$res_u = mysqli_query($con, $sql_u);
	$res_e = mysqli_query($con, $sql_e);

	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
		 $sql = "insert into uclient(u_id,u_name,u_email,u_password) values('$userid','$uname','$uemail','$password');";
           $results = mysqli_query($con, $query);
           echo 'Saved!';
           exit();
  	}



?>