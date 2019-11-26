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
</body>
</html>

<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
mysqli_select_db($con,"customer_su")or
    die("Could not select db: " . mysql_error());
use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      $username=$_SESSION["email"];
if(isset($_POST["submit"])){
$q="select * from com_su";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_row($r))
{
  $x=$row[0].'chk';
  if(isset($_POST[$x]))
  {
    $q1="update com_su set verified='1' where companyid='$row[0]'";
    mysqli_query($con,$q1);
  }
} 

header("Location:background.php");}
else
{
  $q="select * from com_su";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_row($r))
{
  $x=$row[0].'chk';
  if(isset($_POST[$x]))
  {
    $q1="update com_su set verified='-1' where companyid='$row[0]'";
    mysqli_query($con,$q1);
  }
} 

header("Location:background.php");
}
?>
