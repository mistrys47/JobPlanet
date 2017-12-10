
<html>

<head>
  <title>Job Portal System</title>
  <style>
  
.form {
  margin-top: 100px;
  
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
</head>



<body background="job9.jpg" style="background-position:center;width:100%;height:100%;background-repeat:no-repeat;background-size:cover;">
<button style="margin-left:92%;width:7%;
    padding:7px;
border:none;color:black;background:Transparent;font-size:15pt;font-family:cursive;" onclick="location.href='homepage.php'" value="Homepage">Homepage</button>

    <center><br><br>
    <br><br> <br><br>
    <h2 style="font-family:courier;">Find the perfect company and make the world more cherishing.</h2>
    </center>

    <center>
      <form method="post" class="form" action = "empLogin1.php">
	
	<div><input  type="text" placeholder="E-mail" name="username" class="form__input" required></div>
	
	<div><input  type="password" placeholder="Password" name="password" class="form__input" required></div>
	
    <input class="btn"  type="submit" value="Login">
      </form>
    </center>
</body>

</html>
