<?php

namespace private\Classes;

use private\Classes\Database\ProductManagement;
use private\Classes\Database\SearchManagement;
use private\Classes\Database\UserManagement;
use private\Classes\User\User;

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

        for ($i = $startingProduct; $i < 25 && count($products) > $i; $i++) {

            /*if (count($products) <= $i) {
                return;
            }
            */

            $product = $products[$i];
            $favourite = $this->checkIfFavourite($product["id"], User::getUserId());

            echo $this->createElement($product['id'], $product['image'],
                $product['title'], $product['price'], $favourite);
        }
    }

    public function searchProducts($title)
    {
        $products = SearchManagement::searchProducts($title);

        foreach ($products as $product) {
            $favourite = $this->checkIfFavourite($product["id"], User::getUserId());
            echo $this->createElement($product["id"], $product["image"]
                , $product["title"], $product["price"], $favourite);
        }
    }

// TODO set up link for product page
    private function getStartingProduct($page): float|int
    {
        return ($page - 1) * 25;
    }

    private function createElement($productId, $productImage, $productTitle, $productPrice, $favourite): string
    {
        return "<div class= 'col-lg-3 col-md-3 col-sm-4 col-xl-2 my-2 col-6'>
            <div class= 'card product-card p-2' id= $productId>
                <a href=product.php?id=$productId>
                    <img src=" . "recourses/images/ProductImages/" . $productId . "/" . $productImage . " class= 'card-img-top'>
                </a>
                <div class='card-body p-0'>
                    <div>
                        <div class= 'text-end py-2'>
                            <i class='$favourite fa-heart icon add-to-favourite'></i>
                            <i class='fas fa-shopping-cart icon add-to-cart ms-1' id=$productId></i>
                        </div>
                    </div>
                    <a class='text-decoration-none' href= product.php?id=$productId>
                    <h5 class='card-title title'>" . $productTitle . "</h5>
                    <p class='card-text mt-3' style='font-size: 18px'>" . '$' . $productPrice . "</p>
                    </a>                  
                </div>
            </div>
            </div>";
    }

    private function checkIfFavourite($productId, $userId): string
    {
        if (UserManagement::isProductAddedToFavourite($userId, $productId)) {
            return "fas";
        }

        return "far";
    }
}