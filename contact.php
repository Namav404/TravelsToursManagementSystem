<?php
require("session.php");

if(isset($_POST['post'])) {
    $name = $row['name'];
    $mail = $row['email'];
    $message = mysqli_real_escape_string($db, $_POST['message']);
    mysqli_query($db, "INSERT INTO message (name,email,message) VALUES ('$name','$mail', '$message')");
    header('refresh: 1; url=contact.php');  // Refresh the page in 1 sec
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
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
    <div class="container py-5">
        <div class="row box-con">
            <div class="col-sm-6 p-4">
                <h2 class="display-4">Write to us</h2>
                <p class="font-italic">We are here to answer any question you may have about our tours and travels
                    experiences. Reach out to us and we will respond as soon as we can.</p>
                <h4 class="py-2">Leave your message</h4>
                <form method="POST">
                    <textarea class="form-control" name="message" rows="4" cols="60" required></textarea>
                    <input type="submit" class="btn btn-sm btn-warning my-3 text-white" name="post" value="Message">
                </form>
            </div>
            <div class="col-sm-6 p-5 text-white bg-con">
                <h2 class="text-center py-3">Contact Information</h2>
                <p class="pl-4 pt-4"><img src="img/location.png"> G10 Almira Appts, Platto, 18th June Road, Panaji.</p>
                <p class="pl-4"><img src="img/phone.png"> + 01 234 567 89</p>
                <p class="pl-4 pb-4"><img src="img/filled-message.png"> toursntravelsinc@gmail.com</p>
            </div>
        </div>
        <p class="text-center pt-4" style="font-size:1.5em;">View Recent Comments</p>
        <?php
        $res = mysqli_query($db, "SELECT * FROM message ORDER BY id DESC");
        while($rows = mysqli_fetch_array($res)) {
            echo '<br>'.$rows['name'].' <b>·</b> '.$rows['email'].'<br>
            <i class="pl-3">'.$rows['message'].'</i><br>';
        } ?>
    </div>
</body>

</html>