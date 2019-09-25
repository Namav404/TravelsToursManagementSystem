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
    <div class="container caro text-center">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/dd1 (2).jpg" height="450" width="1200" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="img/imc.jpg" height="450" width="800" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="img/dd1 (2).jpg" height="450" width="1200" alt="New York">
                </div>
                <div class="carousel-item">
                    <img src="img/dd1 (2).jpg" height="450" width="1200" alt="New York">
                </div>
                <div class="carousel-item">
                    <img src="img/ds.jpg" height="450" width="800" alt="New York">
                </div>
                <div class="carousel-item">
                    <img src="img/dd1 (2).jpg" height="450" width="1200" alt="New York">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/dd1 (2).jpg" height="450" width="1200" alt="New York">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</body>

</html>