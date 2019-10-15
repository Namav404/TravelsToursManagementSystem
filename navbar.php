<?php require("session.php"); ?>
<head>
    <script src="js/bootstrap.min.js"></script>
</head>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
    <p class="navbar-brand">TOURS & TRAVELS</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto" id="nav-items">
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="explore.php">EXPLORE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="book.php">BOOK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="" data-toggle="modal" data-target="#myModal">USER</a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar fixed-bottom navbar-expand-sm bg-primary">
    <span class="text-white ml-4">&copy; <i>2019 Tours & Travels Private Limited</i></span>
    <span class="ml-auto mr-4">
        <a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png"></a>
        <a href="https://www.instagram.com" target="_blank"><img src="img/instagram.png"></a>
        <a href="https://in.linkedin.com" target="_blank"><img src="img/linkedin.png"></a>
        <a href="https://twitter.com" target="_blank"><img src="img/twitter.png"></a>
    </span>
</nav>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">My Account</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="img/user_img.png" class="rounded-circle" height="80" width="80" alt="User Icon">
                </center><br>
                <b>Username : </b> <?php echo $row['username']; ?><br>
                <b>Name : </b> <?php echo $row['name']; ?><br>
                <b>Email : </b> <?php echo $row['email']; ?><br>
                <b>Phone No. : </b> +91<?php echo $row['pno']; ?><br>
                <b>Address : </b> <?php echo $row['address']; ?><br>
            </div>
            <div class="modal-footer">
                <form method="GET">
                    <input type="submit" name="logout" class="btn btn-sm btn-primary" value="Logout">
                </form>
            </div>
        </div>
    </div>
</div>