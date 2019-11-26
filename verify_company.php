
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
        


<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
mysqli_select_db($con,"customer_su")or
    die("Could not select db: " . mysql_error());
    $username=$_SESSION["email"];
    echo "<center>";
    echo '<form method="post" action="verify_company1.php" >';
    $q="select * from com_su where verified='0'";
    $i=mysqli_query($con,$q);
    if(mysqli_num_rows($i)==0)
    {
        echo "<script>alert('No new company');location.href='background.php';</script>";
    }
        while($row2=mysqli_fetch_row($i))
        {
			?>
			
			<div class="row" >
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
		
                 <h2 class="mr-3 text-black h4"><?php echo $row2[1];?></h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4"><?php echo $row2[4];?></span>
                 </div>
				 
               </div>
			   
               <div class="job-post-item-body d-block d-md-flex">
                 <div><span class="fl-bigmug-line-add139"></span><span><?php echo $row2[2];?></span></div>
				 
               </div>
			         <div class="job-post-item-body d-block d-md-flex">Bio : 
                <?php echo $row2[6];?>
               </div>
              </div>

              <div class="ml-auto">
              
			  <input type="checkbox"  name="<?php echo $row2[0].'chk'; ?>" >
              
				</div>
          </div>
		  </div>
		  </div>
		
			
			
			<?php
			
			
        
        }
   
    echo "<input type='submit' name='submit' value='Approve' class='btn btn-primary  py-2 px-4' style='margin-top:10px;'><input type='submit' name='submit1' value='Reject' class='btn btn-primary py-2 px-4' style='margin-left: 10px;margin-top: 10px;'>";
	
		
	echo "</form>";
    echo "</center>";
	?>
	
	
	</div>
	</div>
	</body>
	
	</html>
	
	
