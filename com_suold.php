

<html>
<head>
<title>Company_sign_up</title>
<script>
function validate()
{
	//document.write(document.getElementById("password").value);
	if(document.getElementById("password").value!=document.getElementById("password1").value)
	{
		prompt("Confirm ur password");
	}
}
</script>
</head>
<style>
.a{

margin-left:170px;

float:left;
width:250px;


}
#c:after{
color:red;
content:" *";
}

.b{
float:left;
width:300px;
}

</style>
<body >
<br>
<form name="com_su" method="post" action="com_SU1.php"><center>
<fieldset style="height:700px;width:70%;align:center;background-color:	#F5F5DC">
<h1>Sign Up</h1>
<h2>
<div  class="a" id="c"><b>Company Name:</b></div><div class="b"><input  type="text" name="username"  required></div>
<br>
<br>

<div class="a" id="c"><b>E-mail:</b></div><div class="b"><input  type="email" name="email"  required></div>
<br>
<br>
<div class="a" id="c"><b>Password:</b></div><div class="b"><input  type="password" name="password"  required></div>
<br>
<br>

<div class="a" id="c"><b>Confirm Password:</b></div><div class="b"><input  type="password" name="confirmpassword"  required></div>
<br>
<br>

<div class="a" id="c"><b>Adress:</b></div><div class="b"><TEXTAREA name="address" COLS="30" ROWS="5" placeholder="INPUT UR ADDRESSS HERE....."></TEXTAREA></div>
<br>
<br><br><br>
<div class="a" id="c"><b>Contact Number:</b></div><div class="b"><input type="tel" name="contact" required  pattern="[0-9]{10}"></div>
<br>
<br></h2>

<button style="border:none;width:150px;height:40px;font-size:18pt;" type="submit" >Submit</button>
</fieldset>
</center>
