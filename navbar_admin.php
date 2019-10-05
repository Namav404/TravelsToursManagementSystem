<?php require("session.php"); ?>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark">
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