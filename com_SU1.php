<?php
$name=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$pass1=$_POST['confirmpassword'];
$add=$_POST['address'];
if($pass1!=$password)
{
	echo '<script>alert("password and confirm password should be same.");location="com_su.php";</script>';
}
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());
        if($name!=NULL){
$qry = "INSERT INTO `com_su`(username,email,contact,password,address) VALUES('$name','$email','$contact','$password','$add')";
if(mysqli_query($con,$qry))
{
    echo '<script>alert("Successfully signed up!!!");location="com_login.php";</script>';
}
else {
    echo '<script>alert("Account already exis!!!");location="com_su.php";</script>';
}
	//echo "Inserted!";
}

?>
