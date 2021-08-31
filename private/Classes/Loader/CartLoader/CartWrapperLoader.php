<?php

namespace private\Classes\Loader\CartLoader;

use private\Classes\Database\CartManagement;
use private\Classes\Database\ProductManagement;

class CartWrapperLoader extends CartLoader
{

    public function loadUserCart($cartId)
    {
        $cartItems = parent::getUserCartItems($cartId);
        $items = "";
        foreach ($cartItems as $cartItem) {
            $product = ProductManagement::getProduct($cartItem["product_id"]);
            $productPrice = explode(".", $product["price"]);
            $items .= $this->createCartItem($cartItem["product_id"], $product["image"], $product["title"], $productPrice, $cartItem["quantity"]);
        }

        $cartTotal = explode(".", CartManagement::getUserCartTotal($cartId));

        echo "<div class='d-flex flex-column overflow-auto cart-wrapper' id='cart-wrapper'>
                        " . $items . "
                    </div>
                    <div class='total-price w-100 py-2' style='background-color: #efebeb'>
                        <div class='d-flex flex-row fw-bold'>
                            <div class='text-uppercase my-1 sub-total'>
                                <p class='ms-3'>Total:</p>
                            </div>
                            <div class='ms-auto me-3 my-1 sub-total' id='cart-wrapper-sub-total'>
                                <p class='sub-total-cent'><span id='cart-wrapper-price'>$" . $cartTotal[0] . "</span><span
                                            id='cart-wrapper-cent' class='cent'>." . $cartTotal[1] . "</span></p>
                            </div>
                        </div>
                    </div>";
    }

    public function loadSessionCart($cartId)
    {
        $cartItems = parent::getSessionCartItems($cartId);
        $items = "";
        $cartTotal = 0;
        foreach ($cartItems as $cartItem) {
            $product = ProductManagement::getProduct($cartItem["product_id"]);
            $productPrice = explode(".", $product["price"]);
            $cartTotal += (float)$product["price"] * (int)$cartItem["quantity"];
            $items .= $this->createCartItem($cartItem["product_id"], $product["image"], $product["title"], $productPrice, $cartItem["quantity"]);
        }

        $cartTotal = number_format($cartTotal, 2);
        $cartTotal = explode(".", $cartTotal . "");

        echo "<div class='d-flex flex-column overflow-auto cart-wrapper' id='cart-wrapper'>
                        " . $items . "
                    </div>
                    <div class='total-price w-100 py-2' style='background-color: #efebeb'>
                        <div class='d-flex flex-row fw-bold'>
                            <div class='text-uppercase my-1 sub-total'>
                                <p class='ms-3'>Total:</p>
                            </div>
                            <div class='ms-auto me-3 my-1 sub-total' id='cart-wrapper-sub-total'>
                                <p class='sub-total-cent'><span id='cart-wrapper-price'>$" . $cartTotal[0] . "</span><span
                                            id='cart-wrapper-cent' class='cent'>." . $cartTotal[1] . "</span></p>
                            </div>
                        </div>
                    </div>";
    }

    private function createCartItem($productId, $productImage, $productTitle, $productPrice, $productQuantity): string
    {
        return "<div class='card card-wrapper-item mb-2 border-0'>
    <div class='row g-0 w-100'>
        <div class='col-4 cart-wrapper-product-image'><a href='product.php?id=" . $productId . "'><img class='img-fluid'
                                                                                      src='recourses/images/ProductImages/" . $productId . "/" . $productImage . "'></a>
        </div>
        <div class='col-8 w-75'>
            <div class='card-body p-0 ms-3 mt-2'>
                <div class='d-flex flex-row'><a class='text-decoration-none' href='product.php?id=" . $productId . "'><h5
                                class='card-title title'>" . $productTitle . "</h5></a>
                    <button type='button' aria-label='Close' class='btn-close ms-auto'></button>
                </div>
                <div class='d-flex flex-row'>
                    <div><p><span class='cart-wrapper-price'>$" . $productPrice[0] . "</span><span class='cent'>" . '.' . $productPrice[1] . "</span></p></div>
                    <div class='ms-5'><p class='quantity text-muted mt-2'>x&nbsp;&nbsp;" . $productQuantity . "</p></div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }
}