
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
$q="select companyid from com_su where email='".$username."'";
$i=mysqli_query($con,$q);
$r=mysqli_fetch_row($i);
$com_id=$r[0];


$q="select * from job where companyid=".$com_id;
$i=mysqli_query($con,$q);
while($r=mysqli_fetch_row($i))
{
	$x=$r[6];
	$x.='delete';
	if(isset($_POST[$x]))
	{
		$q1="delete from job where id=".$r[6];
		mysqli_query($con,$q1);
		echo '<script>window.loaction.href="company_update.php";</script>';
	}
	$x=$r[6];
	$x.='update';
	if(isset($_POST[$x]))
	{
		$y=$r[6];
		$exp=$_POST[$y."exp"];
		$vac=$_POST[$y."vac"];
		$sal=$_POST[$y."sal"];
		$q1="update job set experience=$exp,vacancy=$vac,salary=$sal where id=$y";
		mysqli_query($con,$q1);
		echo '<script>window.loaction.href="company_update.php";</script>';

	}
}







$q="select * from job where companyid=".$com_id;
$i=mysqli_query($con,$q);
echo '<form method="post" action="company_update.php">';
while($r=mysqli_fetch_row($i))
{
	
	?>
	
	<div class="row" >
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
		
                 <h2 class="mr-3 text-black h4"><?php echo $r[3];?></h2>
				 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4"><?php echo $r[1];?></span>
				  
                 
                 </div>
				
               </div>
			   
			  
				 
				 
				  
               <div class="job-post-item-body d-block d-md-flex">
                 <x style="margin-top:8px;">Experience :</x><input type="numbers" style="max-width:150px;margin-left:5px;" name="<?php echo $r[6].'exp';?>" value="<?php echo $r[2];?>" class="form-control" >
				 <x style="margin-left:5px;margin-top:8px;">Vacancy :</x><input type="numbers"style="max-width:150px;margin-left:5px;" name="<?php echo $r[6].'vac';?>" value="<?php echo $r[4];?>" class="form-control" >
				 <x style="margin-left:5px;margin-top:8px;">Salary :</x><input type="numbers"style="max-width:150px;margin-left:5px;" name="<?php echo $r[6].'sal';?>" value="<?php echo $r[5];?>" class="form-control" >
                
              </div>
			  
<div class="ml-auto">
              </div>
				
				</div>
             <button type="submit" class="btn btn-primary  py-2 px-4" style="margin-left:5px;margin-top:30px;" name="<?php echo $r[6].'delete';?>" >Delete</button>
			  <button type="submit" class="btn btn-primary  py-2 px-4" style="margin-left:5px;margin-top:30px;"name="<?php echo $r[6].'update';?>" >Update</button>
				
          </div>
		   
		  </div>
		  </div>

	
	<?php
	
}
echo '</form>';

?>


</div>
</div>
</body>
</html>