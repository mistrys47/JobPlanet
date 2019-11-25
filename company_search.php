
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
    echo '<form method="post" action="company_search1.php" >';
    $q="select companyid from com_su where email='".$username."'";
    $i=mysqli_query($con,$q);
    $r=mysqli_fetch_row($i);


    //from here old
    $result1=mysqli_query($con,"SELECT * FROM job where companyid='$r[0]'");
    while($row1 = mysqli_fetch_array( $result1))
    {
      $job=$row1['id'];
      //echo $job;
      $result=mysqli_query($con,"SELECT * FROM emp_com where job_id='$job'");
      while($row = mysqli_fetch_array( $result))
      {
		
        $un1=$row['emp_email'];//echo $un1;
		$no=$row['no'];
        $result2=mysqli_query($con,"SELECT * FROM cus_su where email='$un1'");
        while($row2 = mysqli_fetch_array( $result2))
        {
			?>
			
			<div class="row" >
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
		
                 <h2 class="mr-3 text-black h4"><?php echo $row2['name'];?></h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4"><?php echo $row2['degree'];?></span>
                 </div>
				 <div class="badge-wrap" style="margin-left:10px;">
                  <span class="bg-warning text-white badge py-2 px-4" ><?php echo $row1['position'];?></span>
                 </div>
               </div>
			   
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <?php echo $row2['experience'].' ';?>Experience</div>
                 <div><span class="fl-bigmug-line-add139"></span><span><?php echo $row2['email'];?></span></div>
				 
               </div>
			  
              </div>

              <div class="ml-auto">
                <button type="submit" style="margin-left:20px;" onclick="a(<?php echo  $row2['employeeid']; ?>)" name="<?php echo $row2['employeeid'] ?>" value="<?php echo $row2['employeeid'] ?>" class="btn btn-primary  py-2 px-4">Resume</button>
			  <input type="checkbox"  name="<?php echo $row2['employeeid'].'chk'; ?>" >
              
				</div>
          </div>
		  </div>
		  </div>
		
			
			
			<?php
			
			
        
        }
      }
    }
	
    echo "<input type='submit' name='submit' class='btn btn-primary  py-2 px-4' style='margin-top:10px;'>";
	
		
	echo "</form>";
    echo "</center>";
	?>
	
	
	</div>
	</div>
	</body>
	
	</html>
	
	
