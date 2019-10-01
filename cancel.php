<?php require("session.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
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
    <?php include("navbar_admin.php"); ?>
    <div class="container my-5">
    <h3 class="text-center"> BOOKINGS DETAILS</h3>
     <table>
         <tr>
          <th>Departure</th>   
          <th>Destination</th>   
          <th>Date of Journey</th>   
          <th>Seats</th>   
          <th>Timing</th>
          <td>Action </td>   
         </tr>
     </table>
</div>
</body>

</html>