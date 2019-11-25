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
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
mysqli_select_db($con,"customer_su")or
    die("Could not select db: " . mysql_error());
use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      $username=$_SESSION["email"];

$q="select * from cus_su";
$i=mysqli_query($con,$q);
while($r=mysqli_fetch_row($i))
{
	$x=$r[0];
	if(isset($_POST[$x]))
	{
		$gotten = mysqli_query($con,"select * from cus_su where employeeid=$x");
		$nr=mysqli_fetch_array($gotten);
	echo "<embed src='data:application/pdf;base64,".base64_encode($nr['resume'])."' alt='Profile Picture'  height='100%' width='100%'  >";
	}
}

if(isset($_POST["sub"]))
    {
      require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; 
    $mail->Username = "$username"; 
    $mail->Password = $_POST["password"];                         // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; 
    $mail->setFrom("$username"); 
    $mail->isHTML(true);
    $mail->Subject = $_POST["sub"];
    $mail->Body=$_POST["message"];
    $q="select * from cus_su";
    $i=mysqli_query($con,$q);
    while($r=mysqli_fetch_row($i))
    {
      $x=$r[0];
      $x.='a';
      if($_POST[$x])
      {
        //echo $r[2];
        $mail->addAddress("$r[2]");
      }
    }
    $mail->send();
	ECHO "<SCRIPT>alert('Mail has been sent...!!!');location='background.php';</script>";
    }




if(isset($_POST["submit"]))
    {
          $q="select * from cus_su";
      $i=mysqli_query($con,$q);
      $cnt=0;
	  
	  ?>
	  
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5" >
		  
		  <form method="post" action="company_search1.php" class="p-5 bg-white">
		  <div id="take_pass" style="display:none;">
	           <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="subject">Subject</label>
                  <input type="text" id="sub" name="sub" class="form-control" placeholder="Subject">
                </div>
              </div>
              
              
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="mail">Mail</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message..."></textarea>
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" name="sub" class="btn btn-primary  py-2 px-4">
                </div>
              </div>


	  
	  
	  <?php
     
      while($r=mysqli_fetch_row($i))
      {
        if(isset($_POST[$r[0].'chk']))
        {
          $cnt=$cnt+1;
          echo '<input type="hidden" name="'.$r[0].'a" value="1">';
        }
        else
        {
          echo '<input type="hidden" name="'.$r[0].'a" value="0">';
        }
      }
      echo '</div></form></div>';
      if($cnt>0)
      {
        echo '<script>document.getElementById("take_pass").style.display="block";</script>';
      }
	  else
	  {
		  echo '<script>location="background.php"</script>';
	  }
    }

?>