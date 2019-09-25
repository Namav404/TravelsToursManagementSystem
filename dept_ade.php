<?php
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel');

$Err1 = $update1 = ""; // Initializing error variable

// If add button is clicked in departure section
if(isset($_POST['add_dept'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $dept = mysqli_real_escape_string($db, $_POST['departure']);
    // To check existing data
    $result_id = mysqli_query($db, "SELECT * FROM departure WHERE id='$id'");
    $result_dp = mysqli_query($db, "SELECT * FROM departure WHERE departure='$dept'");
    if(mysqli_num_rows($result_id) > 0) {
        $Err1="<div class='error text-center py-2'><strong>Please enter an unique ID!</strong></div>";
    } elseif(mysqli_num_rows($result_dp) > 0) {
        $Err1="<div class='error text-center py-2'><strong>This departure place already exists!</strong></div>";
    } else {
        // Insert the data into database
        mysqli_query($db, "INSERT INTO departure VALUES ('$id','$dept')");
        $Err1="<div class='error text-center py-2'><strong>Success!</strong></div>";
        header('refresh: 2; url=book_admin.php');  // Refresh the page in 2 sec
    }
}

if(isset($_GET['dep_del'])) {
    $id = $_GET['dep_del'];
    // Delete from the database
    mysqli_query($db, "DELETE FROM departure WHERE id='$id'");
    $Err1="<div class='error text-center py-2'><strong>Deleted!</strong></div>";
    header('refresh: 2; url=book_admin.php');  // Refresh the page in 2 sec
}

if(isset($_GET['dep_id'])) {
    $id = $_GET['dep_id'];
    $query = "SELECT * FROM departure WHERE id='$id'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    $update1 = '<form method="POST"><div class="form-group row"><b class="col-sm-4 pt-1 pl-3">ID:</b>
        <input type="text" class="form-control form-control-sm col-sm-6" readonly value="'.$row["id"].'">
    </div>
    <div class="form-group row"><b class="col-sm-4 pt-1">Departure:</b>
        <input type="text" class="form-control form-control-sm col-sm-6" name="departure" value="'.$row["departure"].'">
    </div>
    <input type="submit" class="btn btn-sm btn-primary" name="update_dept" value="Update"></form><br>';
}

if (isset($_POST['update_dept'])) {
    $id = $_GET['dep_id'];
    $dest = $_POST['departure'];
    mysqli_query($db, "UPDATE departure SET departure='$dest' WHERE id='$id'");
    header('location: book_admin.php');
}
?>