

<html>
<head>
<title>Customer_sign_up</title>
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
td{
font-size:20;
width:300px;
align:center;
}
</style>
<body >
<br>
<form name="cus_su" method="post" action="cus_SU1.php"><center>
<fieldset style="height:700px;width:70%;align:center;background-color:	#F5F5DC">
<h1>Sign Up</h1>
<table align="center">
<br>
<br>
<tr>
<td >Name<font color="red">*</font></td>
<td>:&nbsp;&nbsp;<input type="text" name="name" required style="border:1px;border-style:inset;border-bottom-color:black;"></td>
</tr>
<tr>
<td >E-mail<font color="red">*</font></td>
<td>:&nbsp;&nbsp;<input type="email" name="email" required style="border:1px;border-style:inset;border-bottom-color:black;"></td>
</tr>
<tr>
<td >Password<font color="red">*</font></td>
<td>:&nbsp;&nbsp;<input type="password" name="password" required style="border:1px;border-style:inset;border-bottom-color:black;"></td>
</tr>
<tr>
<td >Confirm Password<font color="red">*</font></td>
<td>:&nbsp;&nbsp;<input type="password" name="password1" required style="border:1px;border-style:inset;border-bottom-color:black;"></td>
</tr>
<tr>
<td >Address<font color="red">*</font></td>
<TD>&nbsp;&nbsp;&nbsp;<TEXTAREA NAME="add" COLS="30" ROWS="5" placeholder="INPUT UR ADDRESSS HERE....."></TEXTAREA></TD>
</TR>
<tr>
<td >Contact No.<font color="red">*</font></td>
<td>:&nbsp;&nbsp;<input type="digits" name="contact"  required style="border:1px;border-style:inset;border-bottom-color:black;"></td>
</tr>
</table><br>
<button type="submit" >Submit</button>
</fieldset>
</center>
