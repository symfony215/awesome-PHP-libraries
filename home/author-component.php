<?php


function component1($authorname, $authorsince,$authorimg, $authorid){
    $element="
    <div class=\"container col-lg-3 col-md-4 my-3 py-3 text-center \">
        <form  action=\"home.php\">
            <div id=\"author\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <a href=\"authorDes.php?name=$authorname\" onclick=\"post\">
                        <img src=\"$authorimg\" alt=\"\" class=\"img-fluid rounded-circle w-50 mb-3\">
                        </a>
                        <h5>$authorname</h5>
                        <h6>author since $authorsince</h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
    }
    ?>