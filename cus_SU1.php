<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$pass=$_POST['password1'];
//echo $pass;
//echo $password;
if($pass!=$password)
{
	echo '<script>alert("password and confirm password should be same.");location="cus_su.php";</script>';
}
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());
        if($name!=NULL){
$qry = "INSERT INTO `cus_su`(name,email,contact,password) VALUES('$name','$email','$contact','$password')";
if(mysqli_query($con,$qry)){
	//echo "Inserted!";
	echo '<script>alert("Successfully signed up!!!");location="emp_login.php";</script>';
 
}
else
{
  echo '<script type="text/javascript">alert("Account already exists!!!"); location="cus_su.php";</script>';
}
}

?>
