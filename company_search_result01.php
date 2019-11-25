<!DOCTYPE html>
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

   
<?php
$com_name=$_POST['com_name'];
?>
<div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0"><?php echo $com_name; ?></h2>
      </div>
    </div>
<?php
$emp_email=$_POST['emp_email'];
$com_email=$_POST['com_email'];
$emp_name=$_POST['emp_name'];
?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
		  
		  <form action = "company_search_result011.php" enctype="multipart/form-data" method="post" class="p-5 bg-white">
		  
<input type="hidden" value=<?php echo $com_email ?> name="com_email"> <input type="hidden" value=<?php echo $emp_email ?> name="emp_email">
<input type="hidden" name="emp_name" value=<?php echo $emp_name;?> >

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="subject">Subject</label>
                  <input type="text" id="sub" name="sub" class="form-control" placeholder="Subject">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Password</label>
                  <input type="password" id="password" class="form-control" placeholder="Password" >
                </div>
              </div>
              
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="mail">Mail</label> 
                  <textarea name="bodyofmail" id="bodyofmail" cols="30" rows="5" class="form-control" placeholder="Write Your Message..."></textarea>
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="file">File</label>
					<input class="form-control" type="file" name="fname" />
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

  
            </form>
          </div>



</body>
</html>