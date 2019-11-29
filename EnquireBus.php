

<?php
require "init.php";

$sql = "SELECT b_no,a_timing,d_timing FROM `route` NATURAL JOIN `timing` WHERE b_from ="Coimbatore" AND b_to = "Chennai" AND a_timing="05:00" ";
$result = mysqli_query($con, $sql);

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Bus number" . $row["b_no"]. " will be arrived at " . $row["a_timing"]. " and you will reach your destination by " . $row["d_timing"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
