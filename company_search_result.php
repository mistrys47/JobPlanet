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
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());

	$username=$_POST['company_result'];
	$result=mysqli_query($con,"SELECT * FROM com_su WHERE username='$username'");
	//echo "SELECT * FROM com_su WHERE 1";
		while($n=mysqli_fetch_array($result))
		{
					echo "<div class='col-md-12 col-lg-8 mb-5'>
		<img src='data:image/png;base64,".base64_encode($n['imagetmp'])."' alt='Profile Picture' class='avatar' height='450' width='450' >
		</div>";
					?>
					
					
					
       
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Info</h3>
			  
			  <p class="mb-0 font-weight-bold">Company</p>
              <p class="mb-4"><?php echo $n["username"]; ?></p>
			  
			  <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#"><?php echo $n["email"]; ?></a></p>

			  <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#"><?php echo $n["contact"]; ?></a></p>
			  
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"><?php echo $n["address"]; ?></p>

              

					<?php 
					if($n["description"]==NULL)
					{
				
					}
					else
					{
					?>
					 
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"><?php echo $n["description"]; ?></p>

              
					<?php
					}
					?>
					
					</div>
					
            
          
					
					
					<?php $empemail=$_SESSION['email'];
						$result1=mysqli_query($con,"SELECT * FROM cus_su WHERE email='$empemail'");	
						$n1=mysqli_fetch_array($result1);
					?>
<center>					<form action="company_search_result01.php"  method="POST"><input type="hidden" name="com_name" value=<?php echo $n["username"];?> ><input type="hidden" name="com_email" value=<?php echo $n["email"];?> ><input type="hidden" name="emp_name" value=<?php echo $n1["name"];?> ><input type="hidden" name="emp_email" value=<?php echo $empemail;?> ><button class="btn btn-primary  py-2 px-4"  type="submit" >Contact</button></form></center>
		<?php
					
		}
		
		?>
		
		
		
		
            
          </div>
        </div>
      </div>
    </div>

          
		
</body>
</html>