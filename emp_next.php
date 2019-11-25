

<!DOCTYPE html>
<html>
<style>
.a{
margin-left:38%;
float:left;
width:200px;


}
#c:after{
color:red;
content:" *";
}
.b{
float:left;
width:300px;
}
body{
background-color:#f1f1f1;

}
.f {
 
  width: 20%;
  padding: 20px;
  font-family: "Roboto";  
  outline-color:white;  
  outline-style:groove;
  
}
.form {
  margin-top: 100px;
}

.btn {
   
    width: 20%;
    padding: 20px;
	border-width:2px;  
    border-style:outset;
    color: white;
    background:grey;
        
}
</style>
<body background="ext2.jpg" style="background-position:center;width:100%;height:770px;background-repeat:no-repeat;background-size:cover;">

<form method="post" class="form" action="emp_Next1.php">
<center>
<div>
<select name="degree" class="f" >
<option  selected disabled hidden> - Degree - </option>
	<option value="Computer Engg.">Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg.">Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select></div>
<div>
	<select name="exp" class="f" >
<option selected disabled hidden> - Experience- </option>
	<option value="0">fresher</option>
	<option value="1">1 year</option>
	<option value="2">2 years</option>
	<option value="3">3 years</option>
	<option value="4">4 years</option>
	<option value="5">5 years</option>
	<option value="6">6 years</option>
	<option value="7">More years </option>
	</select></div>
	<input  type="submit" class="btn" >
</center>	</form>

</body>

</html>
