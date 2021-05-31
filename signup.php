<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./styles/signup.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <!-- <link rel="stylesheet" href="../css/mobile-style.css"> -->
</head>

<body>
    <header>
        <?php require_once "nav.php" ?>
    </header>
    <?php require_once "script.php" ?>
    <section class="signup">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="pray">
                        <img src="./Image/image.png" alt="img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel text-center">
                        <div class="signup">
                            <form action="" class="signup-form">
                                <h1>Get Started With Your Account</h1>
                                <table class="name">
                                    <tr>
                                        <td>
                                            <div class="input-feild">
                                                <input type="text" id="first_name" placeholder="First Name">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-feild">
                                                <input type="text" id="last_name" placeholder="Last Name">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="contact">
                                    <div class="input-feild">
                                        <input type="text" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="input-feild">
                                        <input type="text" id="address" placeholder="Address">
                                    </div>
                                    <div class="input-feild">
                                        <input type="text" id="contact" placeholder="Contact Number">
                                    </div>
                                </div>
                                <table class="name">
                                    <tr>
                                        <td>
                                            <div class="input-feild">
                                                <input type="text" id="password" placeholder="Password">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-feild">
                                                <input type="text" id="confirm_password" placeholder="Confirm Password">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div class="button">
                                <input type="submit" value="Sign Up" class="btn solid font-weight-bold">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- linking scripts -->
    <!-- <script src="script.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <?php require_once "footer.php" ?>
</body>

</html>