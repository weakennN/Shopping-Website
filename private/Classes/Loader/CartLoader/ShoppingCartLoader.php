<?php

namespace private\Classes\Loader\CartLoader;

use private\Classes\Database\ProductManagement;

class ShoppingCartLoader extends CartLoader
{

    public function loadUserCart($cartId)
    {
        $cartItems = parent::getUserCartItems($cartId);

        foreach ($cartItems as $cartItem) {
            $product = ProductManagement::getProduct($cartItem["product_id"]);
            echo $this->createCartItem($cartItem["product_id"], $product["title"], $product["image"], $cartItem["quantity"], $product["price"]);
        }
    }

    public function loadSessionCart($cartId)
    {
        $cartItems = parent::getSessionCartItems($cartId);

        foreach ($cartItems as $cartItem) {
            $product = ProductManagement::getProduct($cartItem["product_id"]);
            echo $this->createCartItem($cartItem["product_id"], $product["title"], $product["image"], $cartItem["quantity"], $product["price"]);
        }
    }

    private function createCartItem($productId, $productTitle, $productImage, $productQuantity, $productPrice): string
    {
        $productTotal = (int)$productQuantity * (float)$productPrice;
        $productTotal = number_format($productTotal, 2);
        $productTotalTokens = explode(".", $productTotal);
        return "<div class='d-flex flex-column w-100 cart-item border-bottom pb-xl-3 mb-3' id='$productId'>
                    <div class='d-flex flex-row w-100 cart-item-top'>
                        <div class='d-flex flex-row cart-image-holder'>
                            <a href='product.php?id=$productId'>
                                <img style='width: 110px;object-fit: contain'
                                     src='recourses/images/ProductImages/$productId/$productImage' alt=''>
                            </a>
                            <a href='product.php?id=$productId'>
                                <h5 class='mt-3 ms-4 title'>$productTitle</h5>
                            </a>
                        </div>
                        <div class='quantity-holder d-none d-xl-block'>
                            <div class='pagination justify-content-center'>
                                <button class='increase-quantity-btn-minus' style='height: 40px;width: 40px;left: 10px'>
                                    -
                                </button>
                                <input class='quantity-input' value='$productQuantity' style='height: 40px;width: 40px' type='text'>
                                <button class='increase-quantity-btn-plus' style='height: 40px;width: 40px'>+</button>
                            </div>
                        </div>
                        <div class='text-center total-holder d-none d-xl-block' style='width: 30%;align-self: center'>
                            <p class='price'><span class='cart-wrapper-price'>$$productTotalTokens[0]</span><span class='cent'>.$productTotalTokens[1]</span>
                            </p>
                        </div>
                        <div class='ms-auto' style='width: 10%'>
                            <button type='button' class='btn-close float-end mt-2' aria-label='Close'></button>
                        </div>
                    </div>
                    <div class='d-flex flex-row cart-item-bottom mt-3 mt-xl-0'>

                    </div>
                </div>";
    }
}