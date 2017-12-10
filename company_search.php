<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
mysqli_select_db($con,"customer_su")or
    die("Could not select db: " . mysql_error());
    $username=$_SESSION["USERNAME"];
    echo "<center>";
    echo '<table width="100%" style="font-size:20pt;padding-top:5%">';
    echo '<tr style="outline-color:black;outline-style:groove;font-family:courier;font-size:25pt;background-color:grey;">';
    echo "<th>Employee Name</th>";
    echo "<th>Degree</th>";
    echo "<th>Experience</th>";
    echo "<th>Contact Number</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    $result1=mysqli_query($con,"SELECT * FROM job where email='$username'");
    while($row1 = mysqli_fetch_array( $result1))
    {
      $job=$row1['id'];
      //echo $job;
      $result=mysqli_query($con,"SELECT * FROM emp_com where job='$job'");
      while($row = mysqli_fetch_array( $result))
      {
        $un1=$row['employee'];//echo $un1;
        $result2=mysqli_query($con,"SELECT * FROM cus_su where email='$un1'");
        while($row2 = mysqli_fetch_array( $result2))
        {
          echo '<tr style="outline-color:white;outline-style:outset;font-family:courier;height:100px;background-color:white;">';
          echo '<td align="center">',$row2['name'],'</td>';
          echo '<td align="center">',$row2['degree'],'</td>';
          echo '<td align="center">',$row2['experience'],'</td>';
          echo '<td align="center">',$row2['contact'],'</td>';
          echo '<td align="center">',$row2['email'],'</td>';
          echo "</tr>";
        }
      }
    }
    echo "</table>";
    echo "</center>";

?>
