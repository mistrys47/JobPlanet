<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());
        $username=$_SESSION["USERNAME"];
        $i=$_SESSION["i"];

        if(isset($_POST['submit'])){
          foreach($_POST['day'] as $day)
          {
            //$qry="INSERT INTO `emp_com` (employee,job) VALUES('$username','$day')";
            $result1=mysqli_query($con,"SELECT * FROM emp_com WHERE employee='$username' AND job='$day' ");
            $i=mysqli_num_rows($result1);
            if($i)
            {
              echo '<script>alert("U might have applied for company");</script>';
              echo "<center>";
              echo "<table border='5'>";
              echo "<tr>";
              echo "<th>Employee</th>";
              echo "<th>Job</th>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$username</td>";
              echo "<td>$day</td>";
              echo "</tr>";
              echo "</table>";
              echo "</center>";
            }
            else{
              $result=mysqli_query($con,"INSERT INTO `emp_com`(job,employee) VALUES('$day','$username')")or
              die("Could not select db: " . mysql_error());
            }
          }
        }
        /*  while($i)
          {
            if(1)
            {
              echo "1";
              echo $_POST["  $i  "];
            }
            $i=$i-1;
          }*/
          ?>
