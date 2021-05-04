<DOCTYPE html>
    <html lang="en">

    <head>
        <?php require_once "head.php" ?>
        <link rel="stylesheet" href="./styles/navbar.css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto" id="navbarItems">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
                        <a class="nav-link" href="#"><i class="bi bi-person-circle"></i></a>

                    </div>
                </div>
            </div>
        </nav>
    </body>
    <?PHP require_once "script.php" ?>

    </html>