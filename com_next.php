<?php

session_start();

//print_r($_SESSION);
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    //Select Database
    mysqli_select_db($con,"customer_su")or
    die("Could not select db: " . mysql_error());
    $email=$_SESSION['email'];
    $result=mysqli_query($con,"SELECT * FROM com_su WHERE email='$email' AND verified='1'");
    if(mysqli_num_rows($result)>0)
    {

    }
    else
    {
        echo '<script>alert("admin approval required");location.href="background.php";</script>';
        //header("Location:background.php");
    }

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
	
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
	
		 <link href="b/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Vendor CSS-->
    <link href="b/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="b/css/main.css" rel="stylesheet" media="all">
	
</head>

<body background="com_su.webp" style="background-position:center;width:100%;height:100%;background-repeat:no-repeat;background-size:cover;" >



   <div class="page-wrapper bg-gra-02 p-b-100 font-poppins" style="padding-top:80px;">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
						<form action="com_next1.php" method="post" >
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label"> Degree</label>
									<select  class="input--style-4" name="degree" required>
									<option  selected disabled hidden>  Degree  </option>
	<option value="Computer Engg.">Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg.">Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Experience</label>
	<select class="input--style-4" name="experience" required>
<option selected disabled hidden>  Experience </option>
	<option value="0">fresher</option>
	<option value="1">1 year</option>
	<option value="2">2 years</option>
	<option value="3">3 years</option>
	<option value="4">4 years</option>
	<option value="5">5 years</option>
	<option value="6">6 years</option>
	<option value="7">More years </option>
	</select>                                </div>
                            </div>
                        </div>
                        <div class="row row-space" id="z3">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Position</label>
<input  class="input--style-4"type="text" name="position" placeholder="position" required></input>                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Vacancy</label>
<input  class="input--style-4"type="text" name="vacancy" placeholder="vacancy" required></input>                                </div>
                            </div>
                        </div>
                        <div class="row row-space" id="z2">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Salary</label>
<input  class="input--style-4"type="text" name="salary" placeholder="salary" required></input>                                </div>
                            </div>
                            
                        </div>
					
						
						<div class="p-t-15">
							<button class="btn btn--radius-2 btn--blue" type="submit" >Submit</button>
                        </div>
						</form>
					
                </div>
            </div>
        </div>
    </div>



</body>

</html>
