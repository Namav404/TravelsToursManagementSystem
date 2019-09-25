<?php
    session_start();
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'travel');
    
    if (empty($_SESSION['user'])) {
        header('location: login.php');
        exit();
    } else {
        $username = $_SESSION['user'];
        $result = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_GET['logout'])) {
        unset($_SESSION['user']);
        session_destroy();
        header('location: login.php');
        exit();
    }
?>