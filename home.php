<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thejana's Bookstore</title>


    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/home_style.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="icon" type="image/ico" href="./Image/logo.ico">
    <?php require_once "head.php" ?>

</head>


<body>



    <?php require_once "nav.php" ?>



    <!--slide show-->
    <div id="slide-show" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slide-show" data-slide-to="0" class="active"></li>
            <li data-target="#slide-show" data-slide-to="1"></li>
            <li data-target="#slide-show" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" id="slide_img">
                <img src="Image/HomeImage!.jpg" class="d w-100" alt="Image">
                <div id="slide-show-btn" class="carousel-caption d d-md">
                    <button type="button" class="btn btn-outline-info">See more</button>
                </div>
            </div>
            <div class="carousel-item" id="slide_img">
                <img src="Image/HomeImage!.jpg" class="d w-100" alt="Image">
                <div id="slide-show-btn" class="carousel-caption d d-md">
                    <button type="button" class="btn btn-secondary">See more</button>
                </div>
            </div>
            <div class="carousel-item" id="slide_img">
                <img src="Image/HomeImage!.jpg" class="d w-100" alt="Image">
                <div id="slide-show-btn" class="carousel-caption d d-md">
                    <button type="button" class="btn btn-secondary">See more</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slide-show" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide-show" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <br>
    <br>

    <!--header1-->
    <div class="container-fluid">
        <div class="header" id="header1">
            <h5>Top selling</h5>
        </div>
    </div>
    <div class="container-fluid">
        <hr>
    </div>


    <!--top selling item-->
    <?php
    require_once("./home/homeDb.php");
    require_once("./home/item-component.php");

    //Create instance of createdb class
    // $database=new CreateDb("Productdb", "productb");

    ?>



    <div class="container">
        <div class="row text-center py-5">
            <?php
            $sql = "SELECT * FROM productb LIMIT 3,8";
            $result = mysqli_query($con, $sql);
            // $result = $database->getData();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['second_price'], $row['product_image'], $row['id']);
                }
            }

            ?>
        </div>
    </div>






    <!--header2-->
    <div class="container-fluid">
        <div class="header" id="header2">
            <h5>Top Author</h5>
        </div>
    </div>
    <div class="container-fluid">
        <hr>
    </div>
    <!--top author-->
    <?php require_once("./home/author-component.php");
    require_once("./home/homeDb.php"); ?>

    <!--testing-->
    <div class="container">
        <div class="row text-center py-5">
            <?php
            $sql = "SELECT * FROM authortb";
            $result = mysqli_query($con, $sql);
            // $result = $database->getData();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    component1($row['author_name'], $row['author_since'], $row['author_image'], $row['id']);
                }
            }
            ?>
        </div>
    </div>
    <?php require_once "script.php" ?>

    <?php require_once "footer.php" ?>
</body>

</html>