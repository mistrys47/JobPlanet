<?php

session_start();

//print_r($_SESSION);

?>


<!DOCTYPE html>

<html>
<style>

.b{
background-color:#f1f1f1;
float:left;
width:82%;
height:900px;
}
#imp{
float:left;
margin-top:1px;
background-color:#778899;

width:100%;
height:32px;
}
#c
{

background-color:white;
float:left;
width:18%;
height:700px;

}
.btn {
   
    width: 70%;
    padding: 20px;
	border-width:2px;  
    border-style:outset;
    color: white;
    background:grey;
	margin-top:50px;
        
}
button:hover {
  color: grey ;
  background-color: white ;
}


</style>

<body>
<div id="imp"><span style="border: none; background-color:#778899;width:100px;font-size:17pt;"><?php echo $_SESSION['USERNAME'];  ?></span>

 <span style="color:#191919;font-family:courier;font-size:17pt;margin-left:29%;font-size:19pt;"><i><b>jobplanet</b></i></span>
<button style="border: none;margin-left:34.5%;background-color:Transparent;width:100px;font-size:17pt;"  type="button" onclick="location.href='logout.php'">Logout</button></div>
<div class="b">
<iframe src="background.php" style="border:none;" width="100%" height="900px"  name="target"></iframe>

</iframe>
</div>
<div id="c"><center>
<a href="http://localhost/a/emp_next.php" target="target"><span style="color:black"><button type="submit" class="btn">COMPANY</button></span>
</a><br>
<a href="http://localhost/a/search.php" target="target"><span style="color:black"><button type="submit" class="btn" >SEARCH</button></span></a>
</center>

</div>
</body>
</html>
