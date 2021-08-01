<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_profile</title>

    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/user_profile.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="icon" type="image/ico" href="./Image/logo.ico">
    <?php require_once "head.php" ?>
</head>
<body>
    <?php require_once "nav.php" ?>
    <!--user profile--->
    
    <div class="container">
        <!--header-->
        <h3>Hello, Themjana</h3>
        <br>

        <!--profile details-->
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img src="Image/profile.jpg" id="user_img" class="img-fluid"  alt="User_image">
                </div>
                <div class="col-sm-10">
                    <h6><b>Themjana Lakshana</b></h6>
                    <p>Thejana.kalu123@gmail.com</p>

                </div>
            </div>
        </div>

        <!--profile setting-->
        <div id="profile_setting" class="row">
            <div class="col-sm-4">
                <div class="card h-75" id="abtcard">
                        <div class="card-body">
                            <h4>Your order</h4>
                            <p class="card-text">buy book again</p><br>
                        </div>
                </div>
            </div>  
            <div class="col-sm-4">
                <div class="card h-75" id="abtcard">
                        <div class="card-body">
                            <h4>Your order</h4>
                            <p class="card-text">buy book again</p><br>
                        </div>
                </div>
            </div>  
            <div class="col-sm-4">
                <div class="card h-75" id="abtcard">
                        <div class="card-body">
                            <h4>Your order</h4>
                            <p class="card-text">buy book again</p><br>
                        </div>
                </div>
            </div>  
        </div>

        <div  class="row">
            <div class="col-sm-4">
                <div class="card h-75" id="abtcard">
                        <div class="card-body">
                            <h4>Your order</h4>
                            <p class="card-text">buy book again</p><br>
                        </div>
                </div>
            </div>  
            <div class="col-sm-4">
                <div class="card h-75" id="abtcard">
                        <div class="card-body">
                            <h4>Your order</h4>
                            <p class="card-text">buy book again</p><br>
                        </div>
                </div>
            </div>  
            <div class="col-md-4">
                <div class="card h-75" id="abtcard">
                    <div class="row  justify-content-md-center">
                        <div class="col-md-6 col-centered">
                            <img src="Image/1empty_cart.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-6 col-centered">
                            <h4>Your order</h4>
                            <p class="card-text">buy book again</p><br>
                        </div>
                    </div>                        
                </div>
            </div>  
        </div>
        
    </div>

    <?php require_once "script.php" ?>

    <?php require_once "footer.php" ?>
</body>
</html>