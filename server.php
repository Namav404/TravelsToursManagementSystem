<?php
session_start();
// define variables and set to empty values
$name = $email = $mobno = $address = $username = $password = $password_encrypt = $Err = "";

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel');

// If the register button is clicked
if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobno = mysqli_real_escape_string($db, $_POST['phno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $result_uname = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");

    if (mysqli_num_rows($result_uname) == 1) {
        $Err="Username is already taken!";
    } else {
        $password_encrypt = md5($password); // Password encryption before storing in the database [Message Digest 5]
        $query = "INSERT INTO user VALUES ('$name', '$email', '$mobno', '$address', '$username', '$password_encrypt')";
        mysqli_query($db, $query);
        header('location: login.php'); //redirect to login page
        exit();
    }
}

// Login user
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password_encrypt = md5($password); // Password encryption before comparing with the database [Message Digest 5]
    $result_uname = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");
    $result_pass = mysqli_query($db, "SELECT * FROM user WHERE username='$username' AND password='$password_encrypt'");

    if ($username == "Admin1" && $password == "Admin1") {
        $_SESSION['user'] = $username;
        header('location: index_admin.php'); //redirect to admin index page
        exit();
    }

    if (mysqli_num_rows($result_uname) == 0) {
        $Err="Username not found!";
    }
    elseif (mysqli_num_rows($result_pass) == 0) {
        $Err="Password didn't match!";
    }
    else {
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password_encrypt'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result)>0) {
            $_SESSION['user'] = $username;
            header('location: index.php'); //redirect to index page
            exit();
        }
    }
}

?>