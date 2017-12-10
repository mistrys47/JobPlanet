

<html>
<head>
<title>Company_sign_up</title>

</head>
<style>

.form {
  margin-top: 40px;

}

.form__input {

  width: 30%;
  padding: 20px;
  font-family: "Roboto";
  outline-color:white;
  outline-style:groove;

}

.btn {

    width: 30%;
    padding: 20px;
	border-width:2px;
    border-style:outset;
    color: white;
    background:grey;

}

button:hover {
  color: grey ;
  background-color: #def ;
}


</style>
<body  background="com_su.webp" style="background-position:center;width:100%;height:100%;background-repeat:no-repeat;background-size:cover;">
	<button style="margin-left:92%;width:7%;
	    padding:7px;
	border:none;color:black;background:Transparent;font-size:15pt;font-family:cursive;" onclick="location.href='homepage.php'" value="Homepage">Homepage</button>

<br><br><br><br>
<form name="com_su" class="form" method="post" action="com_SU1.php"><center>
<h1>Sign Up</h1>
<div><input  type="text" placeholder="Company Name" name="username" class="form__input" required></div>

<div><input  type="email" placeholder="E-mail" name="email" class="form__input" required></div>

<div><input  type="password" name="password" placeholder="Password"class="form__input" required></div>

<div><input  type="password" name="confirmpassword" placeholder="Confirm Password"class="form__input" required></div>
<div><TEXTAREA name="address" COLS="30" ROWS="5" placeholder="Address" class="form__input" required></TEXTAREA></div>
<div><input type="tel" name="contact" placeholder="Contact Number" class="form__input" required  pattern="[0-9]{10}"></div>

<button class="btn"  type="submit" >Register</button>

</center>
