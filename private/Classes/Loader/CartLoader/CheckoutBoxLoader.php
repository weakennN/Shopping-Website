<?php

namespace private\Classes\Loader\CartLoader;

use private\Classes\Database\CartManagement;
use private\Classes\Database\ProductManagement;

class CheckoutBoxLoader
{

    public function loadUserCheckBox($cartId)
    {
        $cartTotal = CartManagement::getUserCartTotal($cartId);
        $totalProducts = CartManagement::getUserTotalProducts($cartId);

        echo "   <div class='p-4'>
                        <h3 style='font-weight: 500'>Order Description</h3>
                        <hr>
                        <p class='h5 mb-3'>Total products: <span id='total-products'>$totalProducts</span></p>
                        <p id='total' class='h5 mb-4'>Total: $$cartTotal</p>
                        <button type='submit' class='btn btn-primary w-100 text-center btn-lg'>Proceed to checkout
                        </button>
                    </div>";
    }

    public function loadSessionCheckBox($cartId)
    {
        $totalProducts = CartManagement::getSessionCartTotalProducts($cartId);
        $cartItems = CartManagement::getSessionCartItems($cartId);
        $cartTotal = 0;
        foreach ($cartItems as $cartItem) {
            $product = ProductManagement::getProduct($cartItem["product_id"]);
            $cartTotal += (float)$product["price"] * (int)$cartItem["quantity"];
        }

        $cartTotal = number_format($cartTotal, 2);

        echo "   <div class='p-4'>
                        <h3 style='font-weight: 500'>Order Description</h3>
                        <hr>
                        <p class='h5 mb-3'>Total products: <span id='total-products'>$totalProducts</span></p>
                        <p id='total' class='h5 mb-4'>Total: $$cartTotal</p>
                        <button type='submit' class='btn btn-primary w-100 text-center btn-lg'>Proceed to checkout
                        </button>
                    </div>";
    }
}