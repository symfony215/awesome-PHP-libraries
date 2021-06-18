<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>

    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/authors.css">

    <?php require_once "head.php" ?>

</head>

<body>
    <header>
        <?php require_once "nav.php" ?>
    </header>
    <?php require_once "script.php" ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2>Arya Stark</h2>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card h-75">
                    <img src="./Image/author23.jpg" class="img-fluid" alt="books">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card h-75">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque facilis quis expedita quaerat, ipsam dicta, inventore nobis animi nisi dolorem aspernatur tenetur? Sed quas aspernatur ad. Nesciunt delectus modi distinctio inventore ratione non reprehenderit veniam possimus adipisci enim. Deleniti ratione deserunt atque iure doloribus tenetur, perferendis delectus quaerat! Suscipit dolorem quisquam ipsum quos facere minus. Reiciendis adipisci atque illum, libero vitae amet ipsum, quos earum blanditiis provident nisi omnis error culpa ut dolorum perferendis, accusantium ad aperiam illo. Amet, eligendi? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit iure blanditiis architecto aperiam, officiis natus voluptatibus quidem ullam voluptatum perferendis quibusdam perspiciatis temporibus iusto tempora, officia beatae eveniet laborum dolorem.</p><br>
                        <div class="text-center">
                            <a href="#" class="btn btn-default" style="width: 250px;">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
            <h4>Best selling</h4>
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
            $sql = "SELECT * FROM productb";
            $result = mysqli_query($con, $sql);
            // $mysqli_ = $database->getData();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['second_price'],$row['product_image'], $row['id']);
                }
            }
            ?>
    </div>
</div>

<div class="row">
            <h4>Other books of the author</h4>
        </div>

<!--other books-->
    <?php
    require_once("./home/homeDb.php");
    require_once("./home/item-component.php");

    //Create instance of createdb class
    // $database=new CreateDb("Productdb", "productb");

    ?>

    <div class="container">
        <div class="row text-center py-5">
            <?php
            $sql = "SELECT * FROM productb";
            $result = mysqli_query($con, $sql);
            // $result = $database->getData();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['second_price'],$row['product_image'], $row['id']);
                }
            }
            ?>
        </div>
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

    <?php require_once "footer.php" ?>
</body>

</html>