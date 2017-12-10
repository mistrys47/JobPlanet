<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
    mysqli_select_db($con,"customer_su")or
        die("Could not select db: " . mysql_error());
          $username=$_SESSION["USERNAME"];

            $result1=mysqli_query($con,"SELECT * FROM cus_su where email='$username'");
            while($row1=mysqli_fetch_array($result1)){
            $degree=$row1 ['degree'];
            $exp=$row1['experience'];
          //  echo $degree ."..............." .$exp;
        }
          $result=mysqli_query($con,"SELECT * FROM job where experience<='$exp' AND degree='$degree'");
     echo "<form action='search_next.php' method='post'>";
     echo  "<center>";
     echo '<table width="100%" style="font-size:20pt;" >';

     echo '<tr style="outline-color:black;outline-style:groove;font-family:courier;font-size:30pt;">';
     echo "<th>Company Name</th>";
     echo "<th>Position</th>";
     echo "<th>Address</th>";
     echo "<th>Vacancy</th>";
     echo "<th>Salary</th>";
     echo "<th>Contact Number</th>";
     echo "</tr>";

  //$i=0;
          while($row = mysqli_fetch_array( $result ) )
          {
            $e=$row['email'];

            $result2=mysqli_query($con,"SELECT * FROM com_su WHERE email='$e'");

            $row2=mysqli_fetch_array($result2);
            echo '<tr style="outline-color:white;outline-style:outset;font-family:courier;height:100px;">';
            echo '<td align="center">',$row2['username'],'</td>';
            echo "<td align='center'>",$row['position'],"</td>";
            echo "<td align='center'>",$row2['address'],"</td>";
            echo "<td align='center'>",$row['vacancy'],"</td>";
            echo "<td align='center'>",$row['salary'],"</td>";
            echo "<td align='center'>",$row2['contact'],"</td>";echo "<td>";
            echo '<input type="checkbox" name="day[]"  style="zoom:2;"  value="'. $row['id'] . '" />';echo "</td>";
            echo "</tr>";
            //echo $row ['email'] . "---" . $row ['salary'];
            echo "<br>";
            //$i=$i+1;


        }
      //  $_SESSION["i"]=$i;
        echo "</table>";
        echo "<br>";
  //      print_r (employee[0]);

        echo '<input style="
    width: 10%;
    padding: 20px;
	border-width:2px;  
    border-style:outset;
    color: white;
    background:grey;font-size:20px;
        " type="submit" name="submit" value="Submit" />';
        echo "</center>";
        echo "</form>";

  ?>
