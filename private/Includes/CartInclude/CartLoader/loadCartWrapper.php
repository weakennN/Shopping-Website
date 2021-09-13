<?php

use private\Classes\Loader\CartLoader\CartWrapperLoader;
use private\Classes\User\User;

$cartWrapperLoader = new CartWrapperLoader();

if (isset($_COOKIE["userId"])) {
    $cartId = User::getUserCartId();
    $cartWrapperLoader->loadUserCart($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $cartWrapperLoader->loadSessionCart($cartId);
}