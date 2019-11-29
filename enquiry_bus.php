<?php

include "init.php";

if(isset($_POST['tFrom']) & $_POST['tBto']){
	
	$bfrom = $_POST['tFrom'];
    $bto = $_POST['tBto'];
	
	$sql = "SELECT * FROM instruction NATURAL JOIN route where b_from = $bfrom & b_to = $bto ";
	
	     $result = mysqli_query($con, $sql);
	
}
?>

<html>
<head><title>DBMS | Enquiry</title></head>
    <body>
        <h1>Enquiry</h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            Username <input type="text" name="tFrom" value="" /><br/>
            Password <input type="text" name="tBto" value="" /><br/>
            <input type="submit" name="btnSubmit" value="Login"/>
        </form>
    </body>
</html>
