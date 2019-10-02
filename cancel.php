<?php
require("session.php");

if(isset($_GET['sno'])){
    $sno=$_GET['sno'];
    mysqli_query($db,"DELETE FROM seat WHERE sno='$sno'");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Cancel Booking</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Cascading Stylesheet File-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Bootstrap 4 Link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="jquery/jquery.min.js"></script>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="container my-5">
    <h3 class="text-center"> BOOKINGS DETAILS</h3>
     <table class="table table-bordered my-4">
         <tr>
          <th>Departure</th>   
          <th>Destination</th>   
          <th>Date of Journey</th>   
          <th>Seats</th>   
          <th>Timing</th>
          <th>Action </th>   
         </tr>
         <?php 
         $result = mysqli_query($db,"SELECT * FROM seat WHERE uname='".$row['username']."'");
         while($row = mysqli_fetch_array($result)){
            echo '<tr> 
                  <td>'.$row["dept"].'</td>
                  <td>'.$row["dest"].'</td>
                  <td>'.$row["doj"].'</td>
                  <td>'.$row["sno"].'</td>
                  <td>'.$row["time"].'</td>
                  <td><a href="cancel.php?sno='.$row["sno"].'"><img src="img/delete.png" width="20"></td></tr>';

         }

         ?>
     </table>
</div>
</body>

</html>