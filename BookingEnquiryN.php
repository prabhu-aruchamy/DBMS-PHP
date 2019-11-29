<?php

require "init.php";

	$sql_u = "SELECT b_no,trav_hist,b_from,b_to FROM `enq_info` NATURAL JOIN `route` WHERE u_id='1340'; ";
	$res_u = mysqli_query($con, $sql_u);

	if (mysqli_num_rows($res_u) > 0) {

    while($row = $result->fetch_assoc()) {
        echo "You have traveled from " . $row["b_from"]. " to " . $row["b_to"]. " " . $row["trav_hist"]." time in bus number " . $row["b_no"].   "<br>";
    }
    exit();
	
    }
    else {
          echo "Not Booked";
      }
?>