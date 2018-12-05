<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  

</head>
<body>
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
	<?php
		$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	//Select Database
	mysqli_select_db($con,"customer_su")or
	die("Could not select db: " . mysql_error());
	$email=$_SESSION['email'];
	$result=mysqli_query($con,"SELECT * FROM cus_su WHERE email='$email'");
	$n=mysqli_fetch_array($result);
		echo "<div class='col-md-12 col-lg-8 mb-5'>
		<img src='data:image/png;base64,".base64_encode($n['imagetmp'])."' alt='Profile Picture' class='avatar' height='550' width='500'>
		</div>";	
	?>
  <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
			
			<form action = "emp_home_edit.php" method="post" class="p-5 bg-white">
			
			<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="name">Name</label>
                  <input type="text" name="name"  value="<?php echo $_SESSION["name"]; ?>" class="form-control" >
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" readonly value="<?php echo $_SESSION["email"]; ?>" class="form-control" >
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="contact">contact</label>
                  <input type="text" name="contact" value="<?php echo $n["contact"]; ?>" class="form-control" >
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold"  for="degree">Degree</label>
        
<?php if($n['degree']!=NULL)
{
	?>
<?php
if($n['degree']=="Computer Engg.")
{
	?>
	<select name="degree" >
	<option value="Computer Engg." selected>Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg.">Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>
	
	<?php
}
?>	
<?php
if($n['degree']=="Mechanical Engg.")
{
	?>
	<select name="degree" >
	<option value="Computer Engg." >Computer Engg.</option>
	<option value="Mechanical Engg." selected>Mechanical Engg.</option>
	<option value="Civil Engg.">Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>
	
	<?php
}
?>	
<?php
if($n['degree']=="Civil Engg.")
{
	?>
	<select name="degree" >
	<option value="Computer Engg." >Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg." selected>Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>
	
	<?php
}
?>	
<?php
if($n['degree']=="Electronics Engg.")
{
	?>
	<select name="degree" >
	<option value="Computer Engg." >Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg." >Civil Engg.</option>
	<option value="Electronics Engg."selected>Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>
	
	<?php
}
?>
<?php
if($n['degree']=="Electrical Engg.")
{
	?>
	<select name="degree" >
	<option value="Computer Engg." >Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg." >Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg."selected>Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>
	
	<?php
}
?>

<?php
if($n['degree']=="Chemical Engg.")
{
	?>
	<select name="degree" >
	<option value="Computer Engg." >Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg." >Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg." selected>Chemical Engg.</option>
	</select>
	
	<?php
}
?>	
	<?php
}
else
{
	?>
	<select name="degree" >
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
			</div>
			
			<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="experience">Experience</label>
                  <input type="digit" name="exp" value="<?php echo $n["experience"]; ?>" class="form-control" >
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="address">Address</label> 
                  <textarea name="add" id="add" cols="30" rows="5" class="form-control" >  <?php echo $n["address"]; ?></textarea>
                </div>
              </div>
<center><button type="submit" name="editbutton" class="btn btn-primary  py-2 px-4">Edit</button></center>
</form>
 </div> </div> </div> </div> </div>
</body>
</html>
<?php
if(isset($_POST['editbutton']))
{
	$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
    die("Could not select db: " . mysql_error());
	$degree=$_POST['degree'];
	$exp=$_POST['exp'];
	$contact=$_POST['contact'];
	$add=$_POST['add'];
	$name=$_POST['name'];
	$eid=$_SESSION['eid'];
	$result2="UPDATE cus_su SET experience= '$exp', degree='$degree',address='$add', contact='$contact' , name='$name' WHERE employeeid='$eid'";
	if(mysqli_query($con,$result2))
	{
			echo '<script>alert("Successfully updated !!");location="emp_home.php";</script>';
	}
	else
	{
			
				echo '<script>alert("Error !! Sorry please try again.");location="emp_home_edit.php";</script>';
	}

}
?>