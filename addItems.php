<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="stylesheet" href="./styles/addItem.css" />
    <link rel="icon" type="image/ico" href="./Image/logo.ico">
    <?php require_once "head.php" ?>

</head>

<body>
    <?php require_once "nav.php" ?>

    <div class="contaniner">

        <div class="row" id="Formcrd">
            <div class="col-md-2"></div>
            <div class="card col-md-8">
                <h2 id="header">Add a New Book</h2>
                <form method="post" id="frm">
                    <table class="center">
                        <tr>
                            <td>
                                <label>Book Name</label>
                            </td>
                            <td>
                                <input type="text" required /><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" required /><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lebel>Book Description</lebel>
                            </td>
                            <td><input type="text" required /></td>
                        </tr>
                        <tr>
                            <td><label>Price</label></td>
                            <td>
                                <input type="number" required />$
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select name="categories" id="cat" required>
                                    <option value="">-- select a category--</option>
                                    <option value="Art">Art</option>
                                    <option value="Comic">Comic</option>
                                    <option value="Fantacy">Fantacy</option>
                                    <option value="Horror">Horror</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Book Cover</label></td>
                            <td><input type="file" accept="image/*" required></td>
                        </tr>
                        <tr>
                            <td id="subbut" colspan="2">
                                <button class="btn btn-outline-info my-3" type="submit" name="submit" id="submition">GO</button>
                            </td>
                        </tr>
                    </table>


                </form>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>


    <?php require_once "script.php" ?>

    <?php require_once "footer.php" ?>
</body>

</html>