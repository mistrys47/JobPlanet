
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
        if(isset($_POST["submit"]))
      {
          $q="select * from job";
          $i=mysqli_query($con,$q);
          while($r=mysqli_fetch_row($i))
          {
            $x=$r[6];
            $x.='check';
            if(isset($_POST[$x]))
            {
              $q="insert into emp_com(job_id,emp_email) values ('$r[6]','$username')";
              mysqli_query($con,$q);
            }
          }
      }
          
      $q="select * from cus_su where email='".$username."'";
      $i=mysqli_query($con,$q);
      $r=mysqli_fetch_row($i);
      $degree=$r[6];
      $exp=$r[7];
      //echo $degree,$exp;
      $q1="select * from job where degree='".$degree."' and experience<=".$exp." and id not in (select job_id from emp_com where emp_email='".$username."')";
     // echo $q1;
      
      $i1=mysqli_query($con,$q1);
      if(mysqli_num_rows($i1)){
        echo '<form method="post" class="p-5 bg-white" action="search.php"> <table>';
      while($r1=mysqli_fetch_row($i1))
      {
       //echo  '1';
	   ?>
	   
	   <div class="row" >
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
		
                 <h2 class="mr-3 text-black h4"><?php echo $r1[3];?></h2>
                 
               </div>
			   
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <?php echo $r1[4].' ';?>Experience</div>
                 <div><span class="fl-bigmug-line-add139"></span>Rs.<span><?php echo $r1[5].' ';?></span></div>
               </div>
              </div>

              <div class="ml-auto">
			  <input type="checkbox"  name="<?php echo $r1[6].'check'; ?>" value="<?php echo $r1[6];?>">
              </div>
           </div>

         </div>
        </div>
	   
	   
	   <?php
	   
         // echo '1';
      }
      echo '<br><div><button type="submit" class="btn btn-primary  py-2 px-4" name="submit">Submit</button></div>';
      echo '</form>';
    }
      else
      {
        echo 'No jobs now..';
      }




      
?>

	
	</div>
	</div>

</body>

</html>
