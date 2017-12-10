

<!DOCTYPE html>
<html>
<style>


.f {
 
  width: 20%;
  height:50px;
	font-size:20px;
  font-family: "Roboto";  
  outline-color:white;  
  outline-style:groove;
  
}
.f2 {
 
  width: 20.3%;
  height:52px;
 font-size:20px;
  font-family: "Roboto";  
  outline-color:white;  
  outline-style:groove;
  
}
.form {
  margin-top: 100px;
}

.btn {
   
    width: 20.5%;
    padding: 20px;
	border-width:2px;  
    border-style:outset;
    color: white;
    background:grey;
        
}
</style>
<body background="ext2.jpg" style="background-position:center;width:100%;height:770px;background-repeat:no-repeat;background-size:cover;">

<center>
<form method="post" action="com_next1.php" class="form">
<div>
<select  class="f2" name="degree" required>
<option  selected disabled hidden>  Degree  </option>
	<option value="Computer Engg.">Computer Engg.</option>
	<option value="Mechanical Engg.">Mechanical Engg.</option>
	<option value="Civil Engg.">Civil Engg.</option>
	<option value="Electronics Engg.">Electronics Engg.</option>
	<option value="Electrical Engg.">Electrical Engg.</option>
	<option value="Chemical Engg.">Chemical Engg.</option>
	</select>
</div>
<div>	<select class="f2" name="experience" required>
<option selected disabled hidden>  Experience </option>
	<option value="0">fresher</option>
	<option value="1">1 year</option>
	<option value="2">2 years</option>
	<option value="3">3 years</option>
	<option value="4">4 years</option>
	<option value="5">5 years</option>
	<option value="6">6 years</option>
	<option value="7">More years </option>
	</select></div>
<div><input  class="f"type="text" name="position" placeholder="position" required></input></div>
<div><input class="f" type="text" name="vacancy" placeholder="vacancy" required></input></div>
<div><input  class="f"type="text" name="salary" placeholder="salary" required ></input></div>
	
	<button  type="submit" class="btn">Submit</button>
	</form></center>

</body>

</html>
