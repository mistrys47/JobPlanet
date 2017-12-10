<?php
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	session_start();
//Select Database
mysqli_select_db($con,"customer_su")or
 die("Could not select db: " . mysql_error());


  $username=$_POST['username'];
  $password=$_POST['password'];
  if($password!=NULL && $username!=NULL)
  {
    $result=mysqli_query($con,"SELECT * FROM cus_su WHERE email='$username' AND password='$password' ");
    $i=mysqli_num_rows($result);
    if($i)
    {
		$_SESSION["USERNAME"] = $username;
		header("Location:emp.php")or
		die("Could not select db: " . mysql_error());
    }
    else {
      echo '<script type="text/javascript">alert("Invalid Username or Password!!!"); location="emp_login.php";</script>';

    }
  }
?>
