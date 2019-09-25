<?php require("session.php"); ?>

<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-primary">
    <p class="navbar-brand">TOURS & TRAVELS</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto" id="nav-items">
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="index_admin.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="book_admin.php">ADD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="">VIEW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="">FEEDBACK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-lnk" href="session.php?logout">LOGOUT</a>
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