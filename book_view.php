<?php require("session.php"); ?>
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
                <td colspan="5">
                    <form method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="text" placeholder="Search.....">
                            <div class="input-group-append">
                                <span class="input-froup-text"><input type="submit" name="search"
                                        class="btn btn-primary" value="Search"></span>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
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
                echo '<tr><td colspan="5"><h5 class="error text-center">No Bookings Available!</h5></td></tr>';
            } else {
                if(isset($_POST['search'])) {
                    $search = $_POST['text'];
                    $query = "SELECT * FROM seat WHERE uname LIKE '%".$search."%' || sno LIKE '%".$search."%' || doj LIKE '%".$search."%'
                    || dept LIKE '%".$search."%' || dest LIKE '%".$search."%' || time LIKE '%".$search."%'";
                    $result = mysqli_query($db, $query);
                    if(mysqli_num_rows($result)==0) {
                        echo '<tr><td colspan="5"><h5 class="error text-center">Your search did not match!</h5></td></tr>';
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
            }
            ?>
        </table>
    </div>
</body>

</html>