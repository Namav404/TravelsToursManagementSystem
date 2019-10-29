<?php require("session.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Seat Availability</title>
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
    <div class="book_box">
        <h3 class="mb-5">Check Seat Availability</h3>
        <form method="POST" action="seat.php" class="form-inline">
            <label class="pr-2">Date Of Journey</label>
            <input type="date" class="form-control" name="doj" required>
            <div class="form-group">
                <label class="pl-3 pr-2">Departure</label>
                <select class="form-control" name="departure" required>
                    <option hidden></option>
                    <?php
                        $result = mysqli_query($db, "SELECT * FROM departure ORDER BY id");
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='".$row['departure']."'>".$row['departure']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="pl-2 pr-1">Destination</label>
                <select class="form-control" name="destination" required>
                    <option hidden></option>
                    <?php
                        $result = mysqli_query($db, "SELECT * FROM destination ORDER BY id");
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='".$row['destination']."'>".$row['destination']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="pl-3 pr-2">Timing</label>
                <select class="form-control" name="timing" required>
                    <option hidden></option>
                    <?php
                        $result = mysqli_query($db, "SELECT * FROM timing ORDER BY id");
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='".$row['timing']."'>".$row['timing']."</option>";
                        }
                    ?>
                </select>
            </div>
            <input type="submit" class="btn btn-primary ml-3" value="Check">
            <a href="cancel.php" class="ml-2 btn btn-danger">Cancel</a>
        </form>
    </div>
</body>

</html>