<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());
        $username=$_SESSION["USERNAME"];
        $i=$_SESSION["i"];

        if(isset($_POST['submit'])){
          foreach($_POST['day'] as $day)
          {
            $result1=mysqli_query($con,"SELECT * FROM emp_com WHERE employee='$username' AND job='$day' ");
            $i=mysqli_num_rows($result1);
            if($i)
            {
              //echo '<script>alert("U might have applied for company");</script>';
            }
            else{
              $result=mysqli_query($con,"INSERT INTO `emp_com`(job,employee) VALUES('$day','$username')")or
              die("Could not select db: " . mysql_error());
			  //echo '<script>alert("successfully applied for company");</script>';
			  
            }
          }
		  echo '<script>location="background.php";</script>';
        }
        
          ?>
