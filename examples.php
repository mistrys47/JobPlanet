<?php
//Connect Database
echo "Hello";
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());

//Select Database
mysqli_select_db($con,"testdb")or
    die("Could not select db: " . mysql_error());
//Insert Query

//txtenrol txtname
$qry = "insert into studentdb(enrol,name) values(".$_POST['txtname'].",'".$_POST['txtname']."')";
//mysqli_query()
if(mysqli_query($con,$qry))
	echo "Inserted!";
else
	die("Could not insert: " . mysql_error());

//Select Query

$result=mysqli_query($con,"SELECT * FROM studentdb");
while($row = mysqli_fetch_array( $result ) )
{
	echo "<br>";//HTML tag

echo $row ['enrol'] . "---" . $row [1];
}
//Update Query
$qry = "update studentdb set name='Jhanvi' where enrol=1";
if(mysqli_query($con,$qry))
	echo "Updated!";
else
	die("Could not update: " . mysql_error());

//Delete Query

$qry = "delete from studentdb where enrol=1";
if(mysqli_query($con,$qry))
	echo "Deleted!";
else
	die("Could not delete: " . mysql_error());
?>
