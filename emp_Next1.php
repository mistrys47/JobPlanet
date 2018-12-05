<?php
session_start();

$degree=$_POST['degree'];
$exp=$_POST['exp'];
echo $degree ."............".$exp;
$username=$_SESSION["USERNAME"];
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());
	$result2="UPDATE cus_su SET experience= '$exp', degree='$degree' WHERE email='$username'";
		mysqli_query($con,$result2) or
	die("Could not connect: " . mysql_error());
	echo '<script>location="background.php";</script>';
	//echo $result2;
?>
