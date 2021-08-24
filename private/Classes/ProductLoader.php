<?php

namespace private\Classes;

class ProductLoader
{
    public function loadProducts()
    {
        $page = 1;

        if (isset($_GET["id"])) {
            $page = $_GET["id"];
        }

        $startingProduct = $this->getStartingProduct($page);

        $products = \private\Classes\Database\ProductManagement::getProducts();

        for ($i = $startingProduct; $i < 25 && count($products) > $i; $i++) {

            /*if (count($products) <= $i) {
                return;
            }
            */

            $product = $products[$i];
            echo "<div class= 'col-lg-3 col-md-4 col-sm-6 col-xl-2 my-2 col-6'>
            <div class= 'card product-card p-2' id= " . $product['id'] . ">
                <a alt='smt' href=product.php?id=" . $product['id'] . ">
                    <img src=" . "recourses/images/ProductImages/" . $product['id'] . "/" . $product['image'] . " class= 'card-img-top'>
                </a>
                <div class='card-body p-0'>
                    <div>
                        <div class= 'text-end py-2'>
                            <i class='far fa-heart icon add-to-favourite'></i>
                            <i class='fas fa-shopping-cart icon add-to-cart ms-1' id= " . $product['id'] . "></i>
                        </div>
                    </div>
                    <a class='text-decoration-none' href= product.php?id=" . $product['id'] . ">
                    <h5 class='card-title title'>" . $product['title'] . "</h5>
                    <p class='card-text mt-3' style='font-size: 18px'>" . '$' . $product['price'] . "</p>
                </a>
                  
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