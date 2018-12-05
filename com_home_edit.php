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
	$result=mysqli_query($con,"SELECT * FROM com_su WHERE email='$email'");
	$n=mysqli_fetch_array($result);
		echo "<div class='col-md-12 col-lg-8 mb-5'>
		<img src='data:image/png;base64,".base64_encode($n['imagetmp'])."' alt='Profile Picture' class='avatar' height='550' width='500' >
		</div>";	
	?>
  
  <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
			
			<form action = "com_home_edit.php" method="post" class="p-5 bg-white">
			
			<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="name">Name</label>
                  <input type="text" name="username"  value="<?php echo $_SESSION["username"]; ?>" class="form-control" >
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
                  <input type="digit" name="contact" value="<?php echo $n["contact"]; ?>" class="form-control" >
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="description">Description</label> 
                
			  
			  
 
<?php
if($n['description']==NULL)
{
	?>
	<textarea name="des" id="des" cols="30" rows="5" class="form-control" > </textarea>

	<?php
}
else
{
	?>
<textarea name="des" id="des" cols="30" rows="5" class="form-control" >  <?php echo $n["description"]; ?></textarea>

	<?php
}
?>
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
</div> </div> </div> </div>

</body>
</html>
<?php
if(isset($_POST['editbutton']))
{
	$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
    die("Could not select db: " . mysql_error());
	$des=$_POST['des'];
	$contact=$_POST['contact'];
	$add=$_POST['add'];
	$username=$_POST['username'];
	$cid=$_SESSION['cid'];
	$result2="UPDATE com_su SET  description='$des',address='$add', contact='$contact' , username='$username' WHERE companyid='$cid'";
	if(mysqli_query($con,$result2))
	{
			echo '<script>alert("Successfully updated !!");location="com_home.php";</script>';
	}
	else
	{
			
				echo '<script>alert("Error !! Sorry please try again.");location="com_home_edit.php";</script>';
	}

}
?>