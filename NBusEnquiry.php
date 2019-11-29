<?php

require "init.php";

    $bfrom = $_POST["bfrom"];
    $bto = $_POST["bto"];
    $timing = $_POST["timing"];


	//$sql_u = "SELECT b_no,trav_hist,b_from,b_to FROM `enq_info` NATURAL JOIN `route` WHERE u_id='$userid'; ";
	$sql_u = "SELECT b_no,b_from,b_to,contact_no FROM `information` NATURAL JOIN `route` NATURAL JOIN `timing` WHERE b_from = '$bfrom' AND b_to = '$bto' AND a_timing='$timing';";
	$res_u = mysqli_query($con, $sql_u);

	if (mysqli_num_rows($res_u) > 0) {

    while($row = $res_u->fetch_assoc()) {
        echo "The Bus avaliable from " . $row["b_from"]. " to " . $row["b_to"]. " are " . $row["b_no"]. " and the contact number of the bus is " . $row["contact_no"]. <br>";
    }
    exit();
	
    }
    else {
          echo "Not Booked";
      }
?>