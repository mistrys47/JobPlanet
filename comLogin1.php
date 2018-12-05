<?php
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	session_start();
mysqli_select_db($con,"customer_su")or
 die("Could not select db: " . mysql_error());


  $email=$_POST['email'];
  $password=md5($_POST['password']);
  if($password!=NULL && $email!=NULL)
  {
    $result=mysqli_query($con,"SELECT * FROM com_su WHERE email='$email' AND password='$password' ");
	$i=mysqli_num_rows($result);
    if($i)
    {
		$_SESSION["email"] =$email;
		$n=mysqli_fetch_array($result);
		$_SESSION["imagename"]=$n["imagename"];
		$_SESSION["imagetmp"]=$n["imagetmp"];
		$_SESSION["username"]=$n["username"];
		$_SESSION["contact"]=$n["contact"];
		$_SESSION["address"]=$n["address"];
		$_SESSION["cid"]=$n["companyid"];
		
		header("Location:com.php")or
		die("Could not select db: " . mysql_error());
    }
    else {
      echo '<script type="text/javascript">alert("Invalid Username or Password!!!"); location="com_login.php";</script>';

    }
  }
?>
