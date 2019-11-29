<?php
require "init.php";

$sql = "SELECT * FROM `route` WHERE b_from = 'Coimbatore';";
$result = mysqli_query($con, $sql);

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Bus number " . $row["b_no"]. " from " . $row["b_from"]. " to" . $row["b_to"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
