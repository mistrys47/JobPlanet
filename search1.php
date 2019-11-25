
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

  


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
     echo "<form>";
     echo  "<center>";
     echo "<table>";

     echo "<tr>";
     echo "<th>Company Name</th>";
     echo "<th>Position</th>";
     echo "<th>Address</th>";
     echo "<th>Vacancy</th>";
     echo "<th>Salary</th>";
     echo "<th>Contact Number</th>";
     echo "</tr>";

  $i=0;
          while($row = mysqli_fetch_array( $result ) )
          {
            $e=$row['email'];

            $result2=mysqli_query($con,"SELECT * FROM com_su WHERE email='$e'");

            $row2=mysqli_fetch_array($result2);
            echo "<tr>";
            echo '<td align="center">',$row2['username'],'</td>';
            echo "<td align='center'>",$row['position'],"</td>";
            echo "<td align='center'>",$row2['address'],"</td>";
            echo "<td align='center'>",$row['vacancy'],"</td>";
            echo "<td align='center'>",$row['salary'],"</td>";
            echo "<td align='center'>",$row2['contact'],"</td>";echo "<td>";
            echo '<input type="checkbox" id=" ' . $i . ' " value="'. $row['id'] . '" />';echo "</td>";
            echo "</tr>";
            //echo $row ['email'] . "---" . $row ['salary'];
            echo "<br>";
            $i=$i+1;


        }
        while($i)
        {
          echo '<script type="text/javascript">
          function s()
          {
          var x = document.getElementById("0").checked;
          console.log(x);
          }
          </script>';

          //echo '<script type="text/javascript">document.write(document.getElementById("' . $i . '").value)</script>';

          $i=$i-1;
        }

        echo "</table>";
        echo "<br>";
  //      print_r (employee[0]);

        echo '<button onclick="s()" style="border:none;width:100px;height:25px;font-size:9pt;" type="submit" >Submit</button>';
        echo "</center>";
        echo "</form>";


  ?>
  

  </body>
  </html>
  