<?php


function component1($authorname, $authorsince,$authorimg, $authorid){
    $element="
    <div class=\"container col-lg-3 col-md-4 my-3 py-3 text-center \">
        <form  action=\"home.php\">
            <div id=\"author\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <img src=\"$authorimg\" alt=\"\" class=\"img-fluid rounded-circle w-50 mb-3\">
                        <h3>$authorname</h3>
                        <h5>author since $authorsince</h5>
                    </div>
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
    }
    ?>