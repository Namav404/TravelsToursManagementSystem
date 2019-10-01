<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require("session.php");
$disp = ""; // Display variable initialization
// Collecting form inputs for checking the seat availability
$uname = $_SESSION['user'];
$doj = mysqli_real_escape_string($db, $_POST['doj']);
$dept = mysqli_real_escape_string($db, $_POST['departure']);
$dest = mysqli_real_escape_string($db, $_POST['destination']);
$time = mysqli_real_escape_string($db, $_POST['timing']);

// Booking the seats
if(isset($_POST['book'])) {
    $doj = mysqli_real_escape_string($db, $_POST['doj']);
    $dept = mysqli_real_escape_string($db, $_POST['departure']);
    $dest = mysqli_real_escape_string($db, $_POST['destination']);
    $time = mysqli_real_escape_string($db, $_POST['timing']);
    $sno = implode(",", $_POST['Seat']);
    $query = "INSERT INTO seat (uname, sno, doj, dept, dest, time) VALUES ('$uname','$sno','$doj','$dept','$dest','$time')";
    $result = mysqli_query($db, $query);
    $disp = '<div class="text-success text-center pt-1"><b>Seats booking was done successfully!</b></div>';
    header('refresh:5;url=book.php'); // Redirect to booking page in 5 sec

    /*if (mysqli_num_rows($result)>0) {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                        // Specify SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'nmvekp09@gmail.com';               // SMTP username
        $mail->Password = '';                        // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `SSL` also accepted
        $mail->Port = 587;                                    // TCP port to connect to 587 = `TLS` or 465 = `SSL`

        //Recipients
        $mail->setFrom('nmvekp09@gmail.com', 'Tours&Travels');  // Senders Address
        $mail->addAddress($row['email'], $row['name']);         // Recipients Address

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Seat Booking";                      // Set mail subject
        $mail->Body = "Your seat booking was done successfully!<br>
                    Please check your details below:-<br>Name: ".$row['name']."
                    <br>Date of Journey: ".$doj."<br>Seat No.: ".$sno."
                    <br>Departure: ".$dept."<br>Destination: ".$dest."
                    <br>Timing: ".$time."<br><b>Happy Journey!</b>";

        $mail->send();
        if (!$mail->send()) {
            echo '<script>alert("Mailer Error: "'.$mail->ErrorInfo.'")</script>';
        } else {
            echo '<script>alert("Please check your Gmail!")</script>';
        }
    }*/
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Seat Booking</title>
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
        <h3 class="mb-4">Book The Seats</h3>
        <form method="POST" onsubmit="return validateCheckBox();">
            <input type="hidden" name="doj" value="<?php echo $doj; ?>">
            <input type="hidden" name="departure" value="<?php echo $dept; ?>">
            <input type="hidden" name="destination" value="<?php echo $dest; ?>">
            <input type="hidden" name="timing" value="<?php echo $time; ?>">
            <?php
            $query = "SELECT * FROM seat WHERE uname='$uname' && doj='$doj' && dept='$dept' && dest='$dest' && time='$time'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 0) {
                for ($i=1; $i<21; $i++) {
                    echo '<div class="form-check-inline text-center pl-1">
                    <label title="Available" class="form-check-label"><img src="img/available.png"><br>
                    <input type="checkbox" class="form-check_input" name="Seat[]" value="'.$i.'"> S'.$i.'</label></div>';
                }
            } else {
                $seats = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
                while($row = mysqli_fetch_array($result)) {
                    $sno = explode(",", $row['sno']);
                    for($i=0;$i<count($sno);$i++) {
                        $seats[$sno[$i]-1] = 1;
                    }
                }
                for ($i=1; $i<21; $i++) {
                    $j = $i - 1;
                    if($seats[$j] == 1) {
                    echo '<div class="form-check-inline text-center pl-1">
                    <label title="Booked" class="form-check-label"><img src="img/occupied.png"><br>
                    <input type="checkbox" class="form-check_input" name="Seat[]" value="'.$i.'" disabled> S'.$i.'</label></div>';
                    } else {
                        echo '<div class="form-check-inline text-center pl-1">
                        <label title="Available" class="form-check-label"><img src="img/available.png"><br>
                        <input type="checkbox" class="form-check_input" name="Seat[]" value="'.$i.'"> S'.$i.'</label></div>';
                    }
                }
            }
            ?>
            <br>
            <input type="submit" class="mt-3 btn btn-primary" name="book" value="Book">
            <a href="cancel.php" class="mt-3 ml-2 btn btn-danger">Cancel</a>
        </form>
        <?php echo $disp; ?>
    </div>
    <script type="text/javascript">
        function validateCheckBox() {
            var c = document.getElementsByTagName('input');
            for (var i=0; i<c.length; i++) {
                if (c[i].type == 'checkbox') {
                    if (c[i].checked) {
                        return true;
                    }
                }
            }
            alert('Please select atleast 1 seat!');
            return false;
        }
    </script>
</body>

</html>