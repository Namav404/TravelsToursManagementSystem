<?php require("session.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
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
    <div class="bghome text-center">
        <h2 class="display-3 text-white font-italic">Choose your destination</h2>
        <p class="font-italic text-white lead" style="font-size:1.7em;">A world of exceptional destinations for you</p>
        <button class="btn btn-outline-light btn-lg">Make your choice</button>
    </div>
    <div class="caro text-center">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="4000">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bom.jpg" height="450" width="900">
                </div>
                <div class="carousel-item ">
                    <img src="img/three.jpg" height="450" width="900">
                </div>
                <div class="carousel-item">
                    <img src="img/imc.jpg" height="450" width="900">
                </div>
                <div class="carousel-item">
                    <img src="img/ds.jpg" height="450" width="900">
                </div>
                <div class="carousel-item">
                    <img src="img/mant.jpg" height="450" width="900">
                </div>
                <div class="carousel-item">
                    <img src="img/butt.jpg" height="450" width="900">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="row text-white">
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <p>Contact Us</p>
                <p>We're ready to help!</p>
                <ul class="list-unstyled">
                    <li>Panaji<br>+01 234 567 89</li>
                    <li>Margao<br>+01 234 567 89</li>
                    <li>Vasco<br>+01 234 567 89</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <p>Find Out More</p>
                <ul class="list-unstyled">
                    <li>Reviews</li>
                    <li>FAQ's</li>
                    <li>Privacy</li>
                    <li>Policies</li>
                    <li>Terms</li>
                    <li>All Rights Reserved</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <p>Opening Hour</p>
                Mon-Sat: 8am - 7pm<br>
                Sunday Closed
            </div>
            <div class="col-sm-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Pellentesque tempor vulputate viverra.
                Donec eu sodales mauris.
            </div>
        </div>
        <hr>
        <div class="text-white text-center">
            <a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="img/instagram.png"></a>
            <a href="https://in.linkedin.com" target="_blank"><img src="img/linkedin.png"></a>
            <a href="https://twitter.com" target="_blank"><img src="img/twitter.png"></a>
            <a href="https://youtube.com" target="_blank"><img src="img/youtube.png"></a>
            <br>Copyright &copy; <i>2019 Tours & Travels Private Limited</i>
        </div>
    </div>

</body>

</html>