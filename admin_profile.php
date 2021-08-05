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
    <br>
    <!--profile details-->
        <div class="container">
            <div class="row">
                    <h3>Admin,</h3>

                </div>
            </div>
        

        <!--profile setting-->
        <div  class="row">
            <div class="col-md-4 col-sm-12">
                <a href="addItems.php"><div class="card h-90" id="abtcard">
                    <div class="row" id="test" >
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/edit.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Add Book</h5>
                            <p>Add item for public viewing</p>
                        </div>
                    </div>                        
                </div>
            </div>
            </a>  
            <div class="col-md-4 col-sm-12">
            <a href="admin_itemList.php"><div class="card h-90" id="abtcard">
                    <div class="row" id="test" >
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/lists.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Edit lists</h5>
                            <p>Romive & Edit item</p>
                        </div>
                    </div>                        
                </div>
            </div>
            </a>  
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test" >
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                        <img src="Image/profile/messages.jpg" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Messages</h5>
                            <p>Create new messages</p>
                        </div>
                    </div>                        
                </div>
            </div>  
        </div>

        <div  class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test" >
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/gift.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Gift cards</h5>
                            <p>Add gift voucher</p>
                        </div>
                    </div>                        
                </div>
            </div>  
            <div class="col-md-4 col-sm-12">
            <div class="card h-90" id="abtcard">
                    <div class="row" id="test" >
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/payment.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Your Payment</h5>
                            <p>Manage payment settings </p>
                        </div>
                    </div>                        
                </div>
            </div>  
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test" >
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/profiles.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Your Profile</h5>
                            <p>Manage and remove user profile</p>
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