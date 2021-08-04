<?php

$url = $_SERVER['REQUEST_URI'];

$product = "<div class= 'col-lg-2 col-md-4 col-sm-6 my-2'>
            <div class= 'card'>
                <a href=" . $url . "?id=1>
                    <img src='recourses/images/ProductImages/1/neo--the-world-ends-with-you-ps4-30.jpg' alt= '#' class='card-img-top'>
                </a>
                <div class='card-body'>
                    <div>
                        <div class= 'text-end'>
                            <i class='fas fa-heart fa-2x'></i>
                            <i class='fas fa-shopping-cart fa-2x'></i>
                        </div>
                    </div>
                    <h5 class='card-title'>Mouse</h5>
                    <p class='card-text'>10 лв</p>
                </div>
            </div>
            </div>";

/*if (isset($_GET["id"]))
{
    $slide = $_GET["id"];
}else {
    echo "hello";
}
*/


for ($i = 0; $i < 10; $i++) {
    echo $product;
}
// $_COOKIE ["biskvita"] = 10;
// setcookie("smt", 10, time() + 20, '/');
