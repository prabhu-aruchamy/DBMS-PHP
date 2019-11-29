<?php
require "init.php";

$sql = "SELECT b_no,trav_hist,b_from,b_to FROM `enq_info` NATURAL JOIN `route` WHERE u_id='1340';";
$result = mysqli_query($con, $sql);

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Bus Number: " . $row["b_no"]. " Travel Count " . $row["trav_hist"]. "Traveled From " . $row["b_from"]. "Traveled To " . $row["b_to"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
