<?php

use private\Classes\Common\Decrypt;
use private\Classes\Loader\CartLoader\ShoppingCartLoader;

$shoppingCartLoader = new ShoppingCartLoader();

if (isset($_COOKIE["userId"])) {
    $cartId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    $shoppingCartLoader->loadUserCart($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $shoppingCartLoader->loadSessionCart($cartId);
}