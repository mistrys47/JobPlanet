<?php
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	//Select Database
	mysqli_select_db($con,"customer_su")or
	die("Could not select db: " . mysql_error());
$gotten = mysqli_query($con,"select * from cus_su where employeeid=3");
$n=mysqli_fetch_array($gotten);
echo "<embed src='data:application/pdf;base64,".base64_encode($n['resume'])."' alt='Profile Picture'  height='100%' width='100%' >";
?>