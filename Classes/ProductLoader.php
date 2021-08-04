<?php

class ProductLoader
{
    public function loadProducts()
    {
        $page = 1;

        if (isset($_GET["id"])) {
            $page = $_GET["id"];
        }

        $startingProduct = $this->getStartingProduct($page);

        $products = ProductManagement::getProducts();

        for ($i = $startingProduct; $i < 25; $i++) {

            /*if (count($products) <= $i) {
                return;
            }
            */

            $product = $products[1];
            echo "<div class= 'col-lg-3 col-md-4 col-sm-6 col-xl-2 my-2 col-6'>
            <div class= 'card'>
                <a href=" . $_SERVER['REQUEST_URI'] . "?id=" . $product['id'] . ">
                    <img src=" . "recourses/images/ProductImages/" . $product['id'] . "/" . $product['image'] . " class= 'card-img-top'>
                </a>
                <div class='card-body'>
                    <div>
                        <div class= 'text-end'>
                            <i class='fas fa-heart fa-2x'></i>
                            <i class='fas fa-shopping-cart fa-2x'></i>
                        </div>
                    </div>
                    <h5 class='card-title'>" . $product['title'] . "</h5>
                    <p class='card-text'>" . $product['price'] . "</p>
                </div>
            </div>
            </div>";
        }
    }

// TODO set up link for product page
    private function getStartingProduct($page)
    {
        return ($page - 1) * 25;
    }
}