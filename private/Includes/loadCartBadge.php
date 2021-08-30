<?php

use private\Classes\Database\CartManagement;

if (isset($_COOKIE["userId"])) {
    $cartId = explode(" ", $_COOKIE["userId"])[0];
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
