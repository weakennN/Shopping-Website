<?php

use private\Classes\Common\Decrypt;
use private\Classes\Loader\CartLoader\ShoppingCartLoader;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

$shoppingCartLoader = new ShoppingCartLoader();

if (isset($_COOKIE["userId"])) {
    $cartId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    $shoppingCartLoader->loadUserCart($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $shoppingCartLoader->loadSessionCart($cartId);
}