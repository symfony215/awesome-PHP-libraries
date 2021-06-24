<?php

$name = $_GET['name'];
require_once "home/homeDb.php";

$sql1 = "SELECT * FROM productb WHERE product_name='$name'";
$result = $con->query($sql1);
$row = $result;

while ($rows = $result->fetch_assoc()) {
    $price = $rows['product_price'];
    $image = $rows['product_image'];
    $name = $rows['product_name'];
    $second = $rows['second_price'];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Item Description</title>
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="stylesheet" href="./styles/description.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <?php require_once "head.php" ?>
</head>

<body>

    <?php require_once "nav.php" ?>

    <div class="container" id="itemCard">
        <div class="row">
            <div class="col-md-6 col-sm-6">

                <img src="<?= htmlentities($image) ?>" alt="product">
            </div>


            <div class="col-md-6 col-sm-6">
                <div id="itemName"> <?= htmlentities($name) ?></div>
                <div id="catogary">Electronic items</div>
                <div id="itemPrice">Rs <?= htmlentities($price) ?>00.00 &nbsp&nbsp&nbsp <s class="text-secondary"> <?= htmlentities($second) ?></s></div>
                <div id="itemDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corporis corrupti libero aliquid voluptatem delectus cumque at perferendis excepturi veritatis. Facilis, veniam doloribus? Sapiente facere atque fugit ea dicta tenetur. lore</div>
                <div class="row" id="Buttons">
                    <div class="col-2"></div>
                    <div class="col">
                        <button id="buyButton">Buy Now</button>
                    </div>
                    <div class="col">
                        <button id="cartButton">Add To Cart</button>
                    </div>
                    <div class="col-2"></div>
                </div>

            </div>
        </div>
    </div>
    <?php require_once "script.php" ?>
    <footer id="footer1">
        <?php require_once "footer.php" ?>
    </footer>

</body>

</html>