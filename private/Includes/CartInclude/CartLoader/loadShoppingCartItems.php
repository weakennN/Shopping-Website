<?php

use private\Classes\Loader\CartLoader\ShoppingCartLoader;
use private\Classes\User\User;

$shoppingCartLoader = new ShoppingCartLoader();

if (isset($_COOKIE["userId"])) {
    $cartId = User::getUserCartId();
    $shoppingCartLoader->loadUserCart($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $shoppingCartLoader->loadSessionCart($cartId);
}