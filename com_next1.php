<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());

		
        $username=$_SESSION["USERNAME"];
		//echo $username;
        $degree=$_POST['degree'];
        $experience=$_POST['experience'];
        $position=$_POST['position'];
        $vacancy=$_POST['vacancy'];
        $salary=$_POST['salary'];
		$qry = "INSERT INTO `job`(email,degree,experience,position,vacancy,salary) VALUES('$username','$degree','$experience','$position','$vacancy','$salary')";
		if(mysqli_query($con,$qry))
		{
			//echo "Submitted !";
			header("Location:background.php");
			
		}

?>
