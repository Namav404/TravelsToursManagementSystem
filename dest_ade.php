<?php
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel');

$Err2 = $update2 = ""; // Initializing error variable

// If add button is clicked in destination section
if(isset($_POST['add_dest'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $dest = mysqli_real_escape_string($db, $_POST['destination']);
    // To check existing data
    $result_id = mysqli_query($db, "SELECT * FROM destination WHERE id='$id'");
    $result_ds = mysqli_query($db, "SELECT * FROM destination WHERE destination='$dest'");
    if(mysqli_num_rows($result_id) > 0) {
        $Err2="<div class='error text-center py-2'><strong>Please enter an unique ID!</strong></div>";
    } elseif(mysqli_num_rows($result_ds) > 0) {
        $Err2="<div class='error text-center py-2'><strong>This destination place already exists!</strong></div>";
    } else {
        // Insert the data into database
        mysqli_query($db, "INSERT INTO destination VALUES ('$id','$dest')");
        $Err2="<div class='error text-center py-2'><strong>Success!</strong></div>";
        header('refresh: 2; url=book_admin.php');  // Refresh the page in 2 sec
    }
}

if(isset($_GET['des_del'])) {
    $id = $_GET['des_del'];
    // Delete from the database
    mysqli_query($db, "DELETE FROM destination WHERE id='$id'");
    $Err2="<div class='error text-center py-2'><strong>Deleted!</strong></div>";
    header('refresh: 2; url=book_admin.php');  // Refresh the page in 2 sec
}

if(isset($_GET['des_id'])) {
    $id = $_GET['des_id'];
    $query = "SELECT * FROM destination WHERE id='$id'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    $update2 = '<form method="POST"><div class="form-group row"><b class="col-sm-4 pt-1 pl-3">ID:</b>
        <input type="text" class="form-control form-control-sm col-sm-6" readonly value="'.$row["id"].'">
    </div>
    <div class="form-group row"><b class="col-sm-4 pt-1">Destination:</b>
        <input type="text" class="form-control form-control-sm col-sm-6" name="destination" value="'.$row["destination"].'">
    </div>
    <input type="submit" class="btn btn-sm btn-primary" name="update_dest" value="Update"></form><br>';
}

if (isset($_POST['update_dest'])) {
    $id = $_GET['des_id'];
    $dest = $_POST['destination'];
    mysqli_query($db, "UPDATE destination SET destination='$dest' WHERE id='$id'");
    header('location: book_admin.php');
}
?>