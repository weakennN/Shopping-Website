<?php

use private\Classes\Common\Decrypt;
use private\Classes\Loader\CartLoader\CheckoutBoxLoader;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

$checkoutBoxLoader = new CheckoutBoxLoader();

if (isset($_COOKIE["userId"])) {
    $cartId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    $checkoutBoxLoader->loadUserCheckBox($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $checkoutBoxLoader->loadSessionCheckBox($cartId);
}
