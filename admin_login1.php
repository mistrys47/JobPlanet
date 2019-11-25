<?php
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	session_start();
//Select Database
mysqli_select_db($con,"customer_su")or
 die("Could not select db: " . mysql_error());


  $email=$_POST['email'];
  $password=md5($_POST['password']);
  if($password!=NULL && $email!=NULL)
  {
    $result=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' AND password='$password' ");
    $i=mysqli_num_rows($result);
    if($i)
    {
		$_SESSION["email"] =$email;
		header("Location:admin.php")or
		die("Could not select db: " . mysql_error());
    }
    else {
      echo '<script type="text/javascript">alert("Invalid Username or Password!!!"); location="admin_login.php";</script>';

    }
  }
?>
