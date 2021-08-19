<?php

namespace private\Classes\Cart;

use private\Classes\CookieManager;

class Cart
{

    public function addToCart($productId)
    {
        if (isset($_COOKIE["user"])) {
            // TODO: implement after creating login and register
        } else {
            if (isset($_COOKIE["products"])) {
                CookieManager::appendToCookie("products",  " " . $productId, 2147483647, "/");
            } else {
                CookieManager::createCookie("products", $productId, 2147483647, "/");
            }
        }
    }
}