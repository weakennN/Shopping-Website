<?php

namespace private\Classes\Cart;

use private\Classes\Database\UserManagement;

class Cart
{

    public function addToCart($productId, $value)
    {
        if (isset($_COOKIE["userId"])) {
            $id = explode(" ", $_COOKIE["userId"])[0];
            $productPrice = UserManagement::getProductPrice($productId);
            if (UserManagement::isProductAdded($id, $productId)) {
                UserManagement::updateProductQuantity($id, $productId, $value);
            } else {
                UserManagement::createCartItem($id, $productId);
            }
            UserManagement::updateCartTotal($id, $productPrice * $value);
        } else {
            $macAddress = exec('getmac');
            $macAddress = strtok($macAddress, ' ');
            if (UserManagement::isSessionProductAdded($macAddress, $productId)) {
                UserManagement::updateSessionProductQuantity($macAddress, $productId, 1);
            } else {
                UserManagement::createSessionCartItem($macAddress, $productId);
            }
        }
    }

    // TODO: check if products exists in addToCart and removeFromCart functions
    public function removeFromCart($productId)
    {
        if (isset($_COOKIE["userId"])) {
            $id = explode(" ", $_COOKIE["userId"])[0];
            $productPrice = UserManagement::getProductPrice($productId);
            $productQuantity = UserManagement::getProductQuantity($productId);
            $totalProductPrice = (float)$productPrice * (int)$productQuantity;
            UserManagement::deleteCartItem($id, $productId);
            UserManagement::updateCartTotal($id, -($totalProductPrice));
        } else {
            $macAddress = exec('getmac');
            $macAddress = strtok($macAddress, ' ');
            UserManagement::deleteSessionCartItem($macAddress, $productId);
        }
    }

    public function removeCartItem($productId, $value)
    {
        if (isset($_COOKIE["userId"])) {
            $id = explode(" ", $_COOKIE["userId"])[0];
            $productPrice = UserManagement::getProductPrice($productId);
            $productQuantity = UserManagement::getProductQuantity($productId);
            $totalToRemove = $value * $productPrice;
            UserManagement::updateProductQuantity($id, $productId, -$value);
            UserManagement::updateCartTotal($id, -$totalToRemove);
        } else {
            $macAddress = exec('getmac');
            $macAddress = strtok($macAddress, ' ');
            UserManagement::updateSessionProductQuantity($macAddress, $productId, -$value);
        }
    }
}