<?php require("session.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
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
    <div class="container p-5">
        <h2 class="text-center">FEEDBACK</h2>
        <?php
        if(isset($_GET["del"])){
            $id=$_GET["del"];
            mysqli_query($db,"DELETE FROM message WHERE id=$id");
            echo "<script>alert('Message Deleted!')</script>";    
        }
        $res = mysqli_query($db,"SELECT * FROM message ORDER BY id DESC");
        while ($row=mysqli_fetch_array($res)){
            echo '<br>'.$row['name'].' <b>·</b> '.$row['email'].'&nbsp;&nbsp;
            <a href="feedback.php?del='.$row["id"].'">Delete</a><br>
            <i class="pl-3">'.$row['message'].'</i><br>';
        }
        ?>
    </div>    
</body>

</html>