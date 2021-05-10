<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    

    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/home_style.css">
    <?php require_once "head.php"?>
    
</head>


<body>
   

    <header>
        <?php require_once "nav.php"?>
    </header>
    <?php require_once "script.php"?>

    <!--slide show-->
    <div class="container-fluid">
        <div id="slide-show" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slide-show" data-slide-to="0" class="active"></li>
                <li data-target="#slide-show" data-slide-to="1"></li>
                <li data-target="#slide-show" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Image/HomeImage!.jpg" class="d-block w-100" alt="Image">
                <div id="slide-show-btn" class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-secondary">See more</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Image/HomeImage!.jpg" class="d-block w-100" alt="Image">
                <div id="slide-show-btn" class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-secondary">See more</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Image/HomeImage.jpg" class="d-block w-100" alt="Image">
                <div id="slide-show-btn" class="carousel-caption d-none d-md-block">
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
    </div>

    <!--header1-->
    <div  class="container-fluid" id="header1">
        <h5>Top selling</h5>
    </div>

    <!--top selling item-->
    <?php 
        require_once ("./home/homeDb.php");
        require_once ("./home/item-component.php");

        //Create instance of createdb class
        $database=new CreateDb("Productdb", "productb");
     ?>


    <div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
               component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
            }
            ?>
        </div>
    </div>

   
    <?php require_once "footer.php"?>
</body>
</html>