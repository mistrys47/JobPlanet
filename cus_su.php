<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
session_start();

	$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	
mysqli_select_db($con,"customer_su")or
 die("Could not select db: " . mysql_error());

  

$name="";
$email="";
$password="";

$contact="";

$otpValue="";

$address="";
$imagename="";
$res="";
	

if(isset($_POST['confirm'])){
	

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$contact=$_POST['contact'];

$otpValue=$_POST['otpValue'];

$address=$_POST['address'];
$imagename=$_POST['imagename'];
$imagetmp=addslashes(file_get_contents($imagename));
$rs=$_POST['res'];
$res=addslashes(file_get_contents($rs));

$otp=$_POST['otp'];



$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());

		
    if($otp==$otpValue){
$qry = "INSERT INTO `cus_su`(name,email,contact,password,address,imagetmp,imagename,resume) VALUES('$name','$email','$contact','$password','$address','$imagetmp','$imagename','$res')";
		if(mysqli_query($con,$qry)){
				//echo "Inserted!";
			echo '<script>alert("Successfully signed up!!!");location="emp_login.php";</script>';
 
		}
		else
		{
			echo '<script type="text/javascript">alert("Account already exists!!!"); location="cus_su.php";</script>';
		}	
	}else{
		echo '<script>alert("Wrong OTP!!."); location="cus_su.php";</script>';
	}
	
}

if(isset($_POST['btn'])){
	
	
	$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$contact=$_POST['contact'];
$address=$_POST['address'];
$imagename=$_FILES['profileimage']['name'];
$res=$_FILES['resume']['name'];

	
$otpValue=rand(100000,999999);
echo '<script>alert('.$otpValue.');</script>';

	
}



?>

<html>
<head>
<title>Customer_sign_up</title>

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
	
	<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
	
	
	<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="homepage.php" class="text-black h2 mb-0"><img src="jobplanet.png" height="70px"></img></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

             <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="homepage.php">Home</a></li>
                
                <li class="has-children">
                  <a href="category.html">Employee</a>
                  <ul class="dropdown">
                    <li><a href="emp_login.php">Login</a></li>
                    <li><a href="cus_su.php">Signup</a></li>                 
                  </ul>
                </li>
				<li class="has-children">
                  <a href="category.html">Company</a>
                  <ul class="dropdown">
                    <li><a href="com_login.php">Login</a></li>
                    <li><a href="com_su.php">Signup</a></li>                 
                  </ul>
                </li>
				<li><a href="aboutus.php">About</a></li>
				</ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
	
   </div>
   
   
   <div class="page-wrapper bg-gra-02 p-b-100 font-poppins" style="padding-top:80px;">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
						<form name="cus_su" action="cus_su.php" method="post"  enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label"> Name</label>
									<input class="input--style-4" type="text" name="name" placeholder="Name" value="<?php echo $name;?>"   required >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Email</label>
									<input class="input--style-4" type="email" name="email" placeholder="email" value="<?php echo $email;?>"  required >
                                </div>
                            </div>
                        </div>
                        <div class="row row-space" id="z3">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" value="<?php echo $password;?>"  placeholder="Password"  required >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="password1" value="<?php echo $password;?>"  placeholder="Confirm Password"  required >
                                </div>
                            </div>
                        </div>
                        <div class="row row-space" id="z2">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Address</label>
									<TEXTAREA class="input--style-4" NAME="address" COLS="30" ROWS="3"   placeholder="Address"  required><?php echo $address;?></TEXTAREA>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Contact</label>
									<input class="input--style-4" type="digits" name="contact" value="<?php echo $contact;?>"  placeholder="Contact Number"   required pattern="[0-9]{10}">
                                </div>
                            </div>
                        </div>
					
						
						<div class="row row-space" id="z1">
                            <div class="col-6">
                                <div class="input-group">
                                    <button>Upload Profile Image</button>
									<input class="input--style-2" type="file"  name="profileimage" />
								</div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <button>Upload Resume</button>
									<input class="input--style-2" type="file"  name="resume" />
								</div>
                            </div>
                        </div>
						
						<input type="hidden" name="imagename" value="<?php echo $imagename;?>" >
						<input type="hidden" name="res" value="<?php echo $res;?>" >
						<div class="row row-space" style="display:none;" id="otpDiv">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">OTP</label>
									<input type="text"  id="otp" class="input--style-4"  name="otp">
                                </div>
                            </div>
                        </div>
						
						
                        <input type="hidden" class="form-control" id="otpValue" value="<?php echo $otpValue;?>" required name="otpValue">

                        <div class="p-t-15" id="btn">
							<button class="btn btn--radius-2 btn--blue" name="btn" type="submit" >Register</button>
                        </div>
						<div class="p-t-15">
							<button class="btn btn--radius-2 btn--blue" name="confirm" style="display:none;" id="submitBtn" type="submit" >Register</button>
                        </div>
						
						<?php


if(isset($_POST['btn'])){

	echo "<script>	document.getElementById('btn').style.display='none';
	document.getElementById('otpDiv').style.display='block';
	document.getElementById('submitBtn').style.display='block';
	document.getElementById('z1').style.display='none';	
	document.getElementById('z2').style.display='none';
	document.getElementById('z3').style.display='none';
	document.getElementById('name').readOnly=true;
	document.getElementById('email').readOnly=true;
	</script>";
	
	
	
	$mail = new PHPMailer(true);       
		try {
  
			$mail->isSMTP();               
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;                               
			$mail->Username = 'jinesh1076@gmail.com';               
			$mail->Password = 'A@123456';                           
			$mail->SMTPSecure = 'ssl';                            
			$mail->Port = 465;                                    

			$mail->setFrom('jinesh1076@gmail.com','jinesh patel');
			
			
			
			$mail->addAddress($email);
			$mail->isHTML(true);                               
			$mail->Subject = "Verfication";
			$mail->Body    = "This is Your OTP : ".$otpValue."\n Don't Share With anyone.";
    
			$mail->send();
			echo "<script>alert('OTP has been sent');</script>";
		} 
		catch (Exception $e) {
			
			echo "<script>alert('OTP hasnot been sent...".$mail->ErrorInfo."');</script>";
			//echo "<script> location='cus_su.php';</script>";
		}
	
	
	
	
}?>
						
						
                    </form>
					<div  align="center" ><br>
      <p  >If You Are Already Registered Then Please <a href="emp_login.php" style="font-weight:bold;"> Login</a></p>
    </div>
                </div>
            </div>
        </div>
    </div>
   
	
	
</body>
</html>

