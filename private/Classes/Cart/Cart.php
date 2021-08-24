<?php

namespace private\Classes\Cart;

use private\Classes\CookieManager;


class Cart
{

    public function addToCart($productId)
    {
        if (isset($_COOKIE["userId"])) {
            $id = explode(" ", $_COOKIE["userId"])[0];
            $productPrice = \private\Classes\Database\UserManagement::getProductPrice($productId);
            if (\private\Classes\Database\UserManagement::isProductAdded($id, $productId)) {
                \private\Classes\Database\UserManagement::updateProductQuantity($id, $productId, 1);
            } else {
                \private\Classes\Database\UserManagement::createCartItem($id, $productId);
            }
            \private\Classes\Database\UserManagement::updateCartTotal($id, $productPrice);
        } else {
            if (isset($_COOKIE["products"])) {
                CookieManager::appendToCookie("products", " " . $productId, 2147483647, "/");
            } else {
                CookieManager::createCookie("products", $productId, 2147483647, "/");
            }
        }
    }
}