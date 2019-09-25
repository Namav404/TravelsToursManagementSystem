<?php
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel');

$Err3 = $update3 = ""; // Initializing error variable

// If add button is clicked in timing section
if(isset($_POST['add_time'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $time = mysqli_real_escape_string($db, $_POST['timing']);
    // To check existing data
    $result_id = mysqli_query($db, "SELECT * FROM timing WHERE id='$id'");
    $result_tm = mysqli_query($db, "SELECT * FROM timing WHERE timing='$time'");
    if(mysqli_num_rows($result_id) > 0) {
        $Err3="<div class='error text-center py-2'><strong>Please enter an unique ID!</strong></div>";
    } elseif(mysqli_num_rows($result_tm) > 0) {
        $Err3="<div class='error text-center py-2'><strong>This timing already exists!</strong></div>";
    } else {
        // Insert the data into database
        mysqli_query($db, "INSERT INTO timing VALUES ('$id','$time')");
        $Err3="<div class='error text-center py-2'><strong>Success!</strong></div>";
        header('refresh: 2; url=book_admin.php');  // Refresh the page in 2 sec
    }
}

if(isset($_GET['tim_del'])) {
    $id = $_GET['tim_del'];
    // Delete from the database
    mysqli_query($db, "DELETE FROM timing WHERE id='$id'");
    $Err3="<div class='error text-center py-2'><strong>Deleted!</strong></div>";
    header('refresh: 2; url=book_admin.php');  // Refresh the page in 2 sec
}

if(isset($_GET['tim_id'])) {
    $id = $_GET['tim_id'];
    $query = "SELECT * FROM timing WHERE id='$id'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    $update3 = '<form method="POST"><div class="form-group row"><b class="col-sm-4 pt-1 pl-3">ID:</b>
        <input type="text" class="form-control form-control-sm col-sm-6" readonly value="'.$row["id"].'">
    </div>
    <div class="form-group row"><b class="col-sm-4 pt-1">timing:</b>
        <input type="text" class="form-control form-control-sm col-sm-6" name="timing" value="'.$row["timing"].'">
    </div>
    <input type="submit" class="btn btn-sm btn-primary" name="update_time" value="Update"></form><br>';
}

if (isset($_POST['update_time'])) {
    $id = $_GET['tim_id'];
    $time = $_POST['timing'];
    mysqli_query($db, "UPDATE timing SET timing='$time' WHERE id='$id'");
    header('location: book_admin.php');
}
?>