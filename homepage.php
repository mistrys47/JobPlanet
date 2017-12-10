<!DOCTYPE html>

<html>

<head>
  <title>Job Portal System</title>
  <script>
  function preventBack(){window.history.forward();}
	  setTimeout("preventBack()", 0);
	  window.onunload=function (){null};
  }
  </script>
</head>
<style>
button:hover {
  color: grey ;
  background-color: #def ;
}
span:hover {
  color: grey;
  background-color: Transparent;
}

</style>
<body background="job2.jpg"; style="background-position:center;width:100%;height:100%;background-repeat:no-repeat;background-size:cover;" >

 <center><p style="margin-top:7%;color:#191919;font-family:courier;font-size:90pt;text-shadow: 3px 2px #323232;"><i>jobplanet</i></p></center>
   
  
    
    <button style="font-family:cursive;border:none;margin-top:1%;margin-left:36%;background-color:Transparent;width:200px;height:60px;font-size:30pt;" name="employee_homepage" onclick="location.href='http://localhost/a/emp_login_signup.php'"><i>Employee</i></a></button>

    <button style="font-family:cursive;hover:white;border:none;margin-top:1%;margin-left:3%;background-color:Transparent;width:200px;height:60px;font-size:30pt;" name="company_homepage" onclick="location.href='http://localhost/a/com_login_signup.php'">Company</button>
    
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
    <center><a style="color:black;font-size:18pt;" href="http://localhost/a/aboutus.php"><span>About Us</span></a></center>
 
</body>

</html>
