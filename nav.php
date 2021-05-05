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
    // echo ("logged in");
} else {
    $loginStatus = false;
    //echo ("not logged in please try again");
}

?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <?php require_once "head.php" ?>
        <link rel="stylesheet" href="./styles/navbar.css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light" id="navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto" id="navbarItems">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Catogaries</a>
                        <a class="nav-link" href="#">About us</a>
                        <a class="nav-link" href="#"><i class="bi bi-cart"> </i></a>
                        <a class="nav-link" href="#"><i class="bi bi-person-circle"> hi <?= htmlentities($_SESSION['username']) ?></i></a>

                    </div>
                </div>
            </div>
        </nav>
    </body>
    <?PHP require_once "script.php" ?>

    </html>