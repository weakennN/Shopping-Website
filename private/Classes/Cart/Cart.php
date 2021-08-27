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
                //CookieManager::appendToCookie("products", " " . $productId, 2147483647, "/");
                $this->appendToProductCookie($productId);
            } else {
                CookieManager::createCookie("products", $productId . "-1", 2147483647, "/");
            }
        }
    }

    public function appendToProductCookie($productId)
    {
        $productsString = $_COOKIE["products"];
        $products = explode(" ", $productsString);
        $found = false;
        for ($i = 0; $i < count($products); $i++) {
            if ($products[$i][0] == $productId) {
                $productQuantity = (int)$products[$i][2];
                $productQuantity += 1;
                if ($i >= 1) {
                    $newCooke = $newCooke . " " . $products[$i][0] . "-" . $productQuantity;
                } else {
                    $newCooke = $newCooke . $products[$i][0] . "-" . $productQuantity;
                }
                $found = true;
            } else {
                if ($i >= 1) {
                    $newCooke = $newCooke . " " . $products[$i];
                } else {
                    $newCooke = $newCooke . $products[$i];
                }
            }
        }

        if ($found == false) {
            $newCooke = $newCooke . " " . $productId . "-1";
        }

        setcookie("products", $newCooke, 2147483647, "/");
    }
}