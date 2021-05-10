<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="./styles/home_style.css">
<?php


function component($productname, $productprice, $productimg, $productid){
    $element="
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form  action=\"home.php\" method=\"post\">
        <div id=\"item-grid\"class=\"card shadow\">
            <div id=\"item-img\">
                <img hight=\"20px\" src=\"$productimg\" alt=\"Image1\" class=\"img-fluid\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$productname</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text\">
                    Some quick example text to build on the card.
                </p>
                <h5>
                    <small><s class=\"text-secondary\">$19.90</s></small>
                    <span class=\"price\">$productprice</span>
                </h5>

                <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                 <input type='hidden' name='product_id' value='$productid'>
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}
?>