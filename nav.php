<?php
$count = 1;
if ($count = 1) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = "Aravinda";
}
$loginStatus = false;
if (($_SESSION['loggedin']) && ($_SESSION['loggedin']) == true) {

    $loginStatus = true;
} else {

    $loginStatus = false;
}

?>



<!-- <head>
    <link rel="stylesheet" href="./styles/navbar.css" />
</head>

<body> -->
<nav class="navbar navbar-expand-md navbar-light" id="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" id="brand" href="home.php">Thejana's Bookstore</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto" id="navbarItems">
                <a class="nav-link" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Catogaries</a>
                <a class="nav-link" href="#">About us</a>
                <a class="nav-link" href="#"><i class="bi bi-cart"> </i></a>
                <a class="nav-link" href="#"><i class="bi bi-person-circle"> hi <?= htmlentities($_SESSION['username']) ?> </i></a>

            </div>
        </div>
        <div class="dropdown d-md-none">
            <button onclick="myFunction()" class="dropbtn bi bi-list"></button>
            <div id="myDropdown" class="dropdown-content">
                <a class="nav-link" id="linknames" href="#"><i class="bi bi-person-circle"> hi <?= htmlentities($_SESSION['username']) ?> </i></a>
                <a class="nav-link" id="linknames" aria-current="page" href="home.php">Home</a>
                <a class="nav-link" id="linknames" href="#">Catogaries</a>
                <a class="nav-link" id="linknames" href="#">About us</a>
                <a class="nav-link" id="linknames" href="#"><i class="bi bi-cart"> </i></a>
            </div>
        </div>
    </div>
</nav>


<script src="js/nav.js"></script>