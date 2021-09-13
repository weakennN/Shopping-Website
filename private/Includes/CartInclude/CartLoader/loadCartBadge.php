<?php

use private\Classes\Database\CartManagement;
use private\Classes\User\User;

if (isset($_COOKIE["userId"])) {
    $cartId = User::getUserCartId();
    $quantity = CartManagement::getUserTotalProducts($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $quantity = CartManagement::getSessionCartTotalProducts($cartId);
}

if ($quantity === null) {
    $quantity = "0";
}

echo $quantity;
