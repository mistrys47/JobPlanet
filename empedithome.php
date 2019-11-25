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
<p><font class="a">Name :</font><input value=<?php echo $_SESSION["name"]; ?> ></p>
<p><font class="a">Email :</font><font class="b">  <?php echo $_SESSION["email"]; ?></p>
<p><font class="a">Mobile Number :</font><input value=<?php echo $n["contact"]; ?>> </p>
<p><font class="a">Degree :</font><div>
<select name="degree" >
<?php if($n['degree']!=NULL)
{
	?>	
	<option  selected disabled hidden> - Degree - </option>
	<option value="Computer Engg.">Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg.">Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>
	<?php
}
?>
</div>
<div></p>
<p><font class="a">Experience :</font><input value=<?php echo $n["experience"]; ?> ><font class="b">(in years)</font></p>
<p><font class="a">Address :</font><textarea COLS="30" ROWS="5">  <?php echo $n["address"]; ?></textarea></p>
</body>
</html>