<?php

namespace private\Classes\Loader\FavouriteListLoader;

use private\Classes\Database\ProductManagement;
use private\Classes\Database\UserManagement;

class FavouriteListLoader
{
    public function load($userId)
    {
        $favouriteProducts = UserManagement::getFavouriteProducts($userId);

        foreach ($favouriteProducts as $favouriteProduct) {
            $product = ProductManagement::getProduct($favouriteProduct["product_id"]);
            echo $this->createItem($product["id"], $product["title"], $product["image"], $product["price"]);
        }
    }

    private function createItem($productId, $productTitle, $productImage, $productsPrice): string
    {
        $price = explode(".", $productsPrice);
        return "<div class='col-lg-4 col-md-6 col-sm-6 col-xl-3 my-2 col-6 product'>
                    <div class='card product-card p-2' id='$productId'>
                        <a href='product.php?id=1'>
                            <img src='recourses/images/ProductImages/$productId/$productImage' class='card-img-top'>
                        </a>
                        <div class='card-body p-0 mt-2'>
                            <a class='text-decoration-none' href='product.php?id=1'>
                                <h5 class='card-title title text-holder'>$productTitle</h5>
                                <p class='card-text price mt-1' style='font-size: 1.5rem'>$$price[0]<span
                                            class='cent'>.$price[1]</span></p>
                            </a>
                            <div class='d-flex flex-row w-100 mt-2'>
                                <button type='button' style='padding: 8px' class='btn btn-primary w-50'>Add to cart
                                </button>
                                <button type='button' style='padding: 8px' class='btn btn-danger w-50 ms-1'>Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>";
    }
}