<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;     	// Enable SMTP authentication
    $emp_email=$_POST['emp_email'];
	$mail->Username = "$emp_email";                 // SMTP username
    $password=$_POST['password'];
	$mail->Password = "$password";                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
	$emp_name=$_POST['emp_name'];
    $mail->setFrom("$emp_email","$emp_name");
	$com_email=$_POST['com_email'];
	//echo '<script>alert("$a1");</script>';
	if($com_email!=NULL)
	{
		$mail->addAddress("$com_email");     // Add a recipient
	}
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
   
	
    //Attachments
	$fname=$_FILES['fname']['name'];
	if($fname!=NULL)
	{
		$mail->addAttachment("$fname");         // Add attachments	
	}
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);	// Set email format to HTML
    $a4=$_POST['sub'];
	if($a4!=NULL)
	$mail->Subject = "$a4";
    //$mail->Body    = 'SW03 <b>2018!</b>';
	$a5=$_POST['bodyofmail'];
	$mail->Body="$a5";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  echo "<script >alert('Message has been sent');location='background.php';</script>";
	//echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>