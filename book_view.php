<?php
require("session.php");

if(isset($_GET['sno'])){
    $sno=$_GET['sno'];
    mysqli_query($db,"DELETE FROM seat WHERE sno='$sno'");
    echo '<script>alert("Ticket was cancelled successfully!")</script>';
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Booking</title>
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
    <div class="container my-5 px-5">
        <h3 class="text-center">BOOKING DETAILS</h3>
        <table class="table table-bordered my-4">
            <tr>
                <th>Date of Journey</th>
                <th>Departure</th>
                <th>Destination</th>
                <th>Timing</th>
                <th>Seat No</th>
            </tr>
            <?php 
            $result = mysqli_query($db,"SELECT * FROM seat ORDER BY id DESC");
            if(mysqli_num_rows($result) == 0) {
                echo '<tr><td colspan="6"><h5 class="error text-center">No Bookings Available!</h5></td></tr>';
            } else {
                while($row = mysqli_fetch_array($result)){
                echo '<tr> 
                    <td>'.$row["doj"].'</td>
                    <td>'.$row["dept"].'</td>
                    <td>'.$row["dest"].'</td>
                    <td>'.$row["time"].'</td>
                    <td>'.$row["sno"].'</td></tr>';
                }
            }
            ?>
        </table>
    </div>
</body>

</html>