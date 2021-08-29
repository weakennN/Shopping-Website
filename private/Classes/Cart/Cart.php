<?php

namespace private\Classes\Cart;

use private\Classes\Database\UserManagement;

class Cart
{

    public function addToCart($productId, $value)
    {
        if (UserManagement::doesProductExist($productId) === false) {
            return;
        }

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
                UserManagement::updateSessionProductQuantity($macAddress, $productId, $value);
            } else {
                UserManagement::createSessionCartItem($macAddress, $productId);
            }
        }
    }

    public function removeFromCart($productId)
    {
        if (UserManagement::doesProductExist($productId) === false) {
            return;
        }

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
        if (UserManagement::doesProductExist($productId) === false) {
            return;
        }

        if (isset($_COOKIE["userId"])) {
            $id = explode(" ", $_COOKIE["userId"])[0];
            $productPrice = UserManagement::getProductPrice($productId);
            $productQuantity = UserManagement::getProductQuantity($productId);
            if (((int)$productQuantity) <= 1 || (int)$productQuantity < (int)$value) {
                $this->removeFromCart($productId);
            }
            $totalToRemove = $value * $productPrice;
            UserManagement::updateProductQuantity($id, $productId, -$value);
            UserManagement::updateCartTotal($id, -$totalToRemove);
        } else {
            $macAddress = exec('getmac');
            $macAddress = strtok($macAddress, ' ');
            $productQuantity = UserManagement::getSessionItemQuantity($macAddress, $productId);
            if (((int)$productQuantity) <= 1 || (int)$productQuantity < (int)$value) {
                $this->removeFromCart($productId);
            }
            UserManagement::updateSessionProductQuantity($macAddress, $productId, -$value);
        }
    }
}