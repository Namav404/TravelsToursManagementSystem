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
    <style>
        body{
            background-color: rgb(207, 86, 86);
            padding: 5em;
        
        }
        
        
    </style>
</head>

<body>
    
   
    <?php include("navbar.php"); ?>
    <div class="bghome text-center">
        <h2 class="display-3 text-white font-italic">Choose your destination</h2>
        <p class="font-italic text-white lead" style="font-size:1.7em;">A world of exceptional destinations for you</p>
        <button class="btn btn-outline-light btn-lg">Make your choice</button>
    </div>
    <div class="caro text-center">
        <div class="carousel slide" data-ride="carousel" data-interval="4000">
            <!-- The slideshow -->
            <div class="carousel-inner">
                
                <div class="carousel-item ">
                    <img src="img/dd1 (2).jpg" height="450" width="900" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="img/imc.jpg" height="450" width="900" alt="Chicago">
                </div>
                <div class="carousel-item ">
                    <img src="img/three.jpg" height="450" width="900" alt="New York">
                </div>
                <div class="carousel-item active">
                    <img src="img/bom.jpg" height="450" width="900" alt="New York">
                </div>
                <div class="carousel-item">
                    <img src="img/ds.jpg" height="450" width="900" alt="New York">
                </div>
                <div class="carousel-item">
                    <img src="img/mant.jpg" height="450" width="900" alt="New York">
                </div>
                <div class="carousel-item">
                    <img src="img/butt.jpg" height="450" width="900" alt="New York">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/butt.jpg" height="450" width="900" alt="New York">
            </div>
        </div>
    </div>
    <div class="footer">
        <span class="text-white ml-4">&copy; <i>2019 Tours & Travels Private Limited</i></span>
        <span class="float-right mr-4">
            <a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="img/instagram.png"></a>
            <a href="https://in.linkedin.com" target="_blank"><img src="img/linkedin.png"></a>
            <a href="https://twitter.com" target="_blank"><img src="img/twitter.png"></a>
        </span>
    </div>
    
   
</body>

</html>