<?php

use private\Classes\Common\Decrypt;
use private\Classes\Loader\CartLoader\CartWrapperLoader;

$cartWrapperLoader = new CartWrapperLoader();

if (isset($_COOKIE["userId"])) {
    $cartId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    $cartWrapperLoader->loadUserCart($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $cartWrapperLoader->loadSessionCart($cartId);
}