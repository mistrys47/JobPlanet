<?php
session_start();
?>
<html>
<style>

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.avatar {
    width:50%;
    border-radius:50%;
}
.a1{
	margin-left:550px;
	font-size:35px;
	font-weight: bold;
	}
.a{
	margin-left:350px;
	font-size:25px;
	font-weight: bold;
	}
.b{
	font-size:25px;
	
}

.c{
	font-size:25px;
	margin-left:660px;
}
.b1{
	float:right;
}
</style>
<body>
<br><br>
<!--  link to edit profile 20:51 16/11/2018-->
<div class="b1"><a href="empedithome.php"><button style="font-size:30px;width:100px;height:50px;">Edit</button></a></div>
	<br><br>
	<?php
		$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	//Select Database
	mysqli_select_db($con,"customer_su")or
	die("Could not select db: " . mysql_error());
	$email=$_SESSION['email'];
	$result=mysqli_query($con,"SELECT * FROM cus_su WHERE email='$email'");
	$n=mysqli_fetch_array($result);
		echo "<div class='imgcontainer'>
		<img src='data:image/png;base64,".base64_encode($n['imagetmp'])."' alt='Profile Picture' class='avatar' >
		</div>";	
	?>
  <br>
  <br>
  <br>
<p><font class="a">Name :</font><font class="b">  <?php echo $_SESSION["name"]; ?></font></p>
<p><font class="a">Email :</font><font class="b">  <?php echo $_SESSION["email"]; ?></font></p>
<p><font class="a">Mobile Number :</font><font class="b">  <?php echo $n["contact"]; ?></font></p>
<p><font class="a">Degree :</font><font class="b">  <?php echo $n["degree"]; ?></font></p>
<p><font class="a">Experience :</font><font class="b">  <?php echo $n["experience"]; ?></font></p>
<p><font class="a">Address :</font><font class="b">  <?php echo $n["address"]; ?></font></p>
</body>
</html>