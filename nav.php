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


<DOCTYPE html>
    <html lang="en">

    <head>
        <?php require_once "head.php" ?>
        <link rel="stylesheet" href="./styles/navbar.css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-light" id="navigation">
            <div class="container-fluid">
<<<<<<< HEAD
                <a class="navbar-brand" id="brand" href="home.php">Thejana's Bookstore</a>
=======
                <a class="navbar-brand" href="home.php">Thejana's Bookstore</a>

             

                <button class="navbar-toggler" id="togglerButton" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button> -->
>>>>>>> 3e0319d4ff8ab82ea2482d3150ef955358266fb8
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
    </body>
    <?PHP require_once "script.php" ?>
    <script src="js/nav.js"></script>

    </html>