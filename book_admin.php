<?php
require("session.php");
include("dept_ade.php");
include("dest_ade.php");
include("time_ade.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Booking Panel</title>
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
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-4 sideline">
                <?php echo $update1; ?>
                <form method="POST">
                    <?php echo $Err1; ?>
                    <div class="form-group row">
                        <b class="col-sm-4 pt-1 pl-3">ID:</b>
                        <input type="number" class="form-control form-control-sm col-sm-6" name="id"
                            placeholder="Enter ID" required>
                    </div>
                    <div class="form-group row">
                        <b class="col-sm-4 pt-1">Departure:</b>
                        <input type="text" class="form-control form-control-sm col-sm-6" name="departure"
                            placeholder="Enter departure place" required>
                    </div>
                    <input type="submit" class="btn btn-sm btn-primary" name="add_dept" value="Add">
                </form><br>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Departure</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM departure ORDER BY id";
                    $result = mysqli_query($db, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['departure']."</td>";
                        echo "<td><a href='book_admin.php?dep_id=".$row["id"]."'><img src='img/edit.PNG' width='24' title='Edit'></a>&nbsp;";
                        echo "&nbsp;&nbsp;<a href='book_admin.php?dep_del=".$row["id"]."'><img src='img/delete.PNG' width='24' title='Delete'></a>";
                        echo "</td></tr>";
                    } ?>
                </table><br>
            </div>
            <div class="col-sm-4 sideline">
                <?php echo $update2; ?>
                <form method="POST">
                    <?php echo $Err2; ?>
                    <div class="form-group row">
                        <b class="col-sm-4 pt-1 pl-3">ID:</b>
                        <input type="number" class="form-control form-control-sm col-sm-6" name="id"
                            placeholder="Enter ID" required>
                    </div>
                    <div class="form-group row">
                        <b class="col-sm-4 pt-1">Destination:</b>
                        <input type="text" class="form-control form-control-sm col-sm-6" name="destination"
                            placeholder="Enter destination place" required>
                    </div>
                    <input type="submit" class="btn btn-sm btn-primary" name="add_dest" value="Add">
                </form><br>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Destination</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM destination ORDER BY id";
                    $result = mysqli_query($db, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['destination']."</td>";
                        echo "<td><a href='book_admin.php?des_id=".$row["id"]."'><img src='img/edit.PNG' width='24' title='Edit'></a>&nbsp;";
                        echo "&nbsp;&nbsp;<a href='book_admin.php?des_del=".$row["id"]."'><img src='img/delete.PNG' width='24' title='Delete'></a>";
                        echo "</td></tr>";
                    } ?>
                </table><br>
            </div>
            <div class="col-sm-4">
            <?php echo $update3; ?>
                <form method="POST">
                <?php echo $Err3; ?>
                    <div class="form-group row">
                        <b class="col-sm-3 pt-1 pl-3">ID:</b>
                        <input type="number" class="form-control form-control-sm col-sm-6" name="id"
                            placeholder="Enter ID" required>
                    </div>
                    <div class="form-group row">
                        <b class="col-sm-3 pt-1">Timing:</b>
                        <input type="text" class="form-control form-control-sm col-sm-6" name="timing"
                            placeholder="Enter 24 hrs format time" required>
                    </div>
                    <input type="submit" class="btn btn-sm btn-primary" name="add_time" value="Add">
                </form><br>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Timing</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM timing ORDER BY id";
                    $result = mysqli_query($db, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['timing']."</td>";
                        echo "<td><a href='book_admin.php?tim_id=".$row["id"]."'><img src='img/edit.PNG' width='24' title='Edit'></a>&nbsp;";
                        echo "&nbsp;&nbsp;<a href='book_admin.php?tim_del=".$row["id"]."'><img src='img/delete.PNG' width='24' title='Delete'></a>";
                        echo "</td></tr>";
                    } ?>
                </table><br>
            </div>
        </div>
    </div>
</body>

</html>