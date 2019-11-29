<?php
require "init.php";

$sql = "SELECT b_no,trav_hist,b_from,b_to FROM `enq_info` NATURAL JOIN `route` WHERE u_id='1340';";
$result = $con->query($sql);

if ($result->num_rows > 0) {
 
 while($row[] = $result->fetch_assoc()) {
 
 $json = json_encode($row);
 
 }
} else {
 echo "0 results";
}
echo $json;
$conn->close();
?>