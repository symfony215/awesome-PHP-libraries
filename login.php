<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <?php require_once "head.php" ?>
    <!-- <link rel="stylesheet" href="../css/mobile-style.css"> -->
</head>

<body>
    <header>
        <?php require_once "nav.php" ?>
    </header>
    <?php require_once "script.php" ?>
    <div class="login">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="pray">
                        <img src="./Image/image.png" alt="img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel text-center">
                        <h1>Sign In to Store</h1>
                        <div class="signin">
                            <form action="" class="signin-form">
                                <div class="input-feild">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="username" placeholder="Username">
                                </div>
                                <div class="input-feild">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" id="password" placeholder="Password">
                                </div>
                                <!-- <div class="remeber">
                                    <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe"> Remember me</label>
                                </div> -->
                                <div class="remeber">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <label for="rememberMe"> Remember me</label>
                                </div>
                                <input type="submit" value="Sign In" class="btn solid font-weight-bold" onclick="lsRememberMe()">
                                <div class="forgot">
                                    <span class="psw"><a href="#"> Forgot Password?</a></span>
                                </div>
                                <div class="register">
                                    <span class="join"><b>Don't have an account?</b> <a href="..signup/index.html">Join with us!</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- linking scripts -->
    <div>
        <?php require_once "footer.php" ?>
    </div>

    <script src="script.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>

</html>