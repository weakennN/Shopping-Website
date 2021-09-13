<?php

use private\Classes\Loader\CartLoader\CheckoutBoxLoader;
use private\Classes\User\User;

$checkoutBoxLoader = new CheckoutBoxLoader();

if (isset($_COOKIE["userId"])) {
    $cartId = User::getUserCartId();
    $checkoutBoxLoader->loadUserCheckBox($cartId);
} else {
    $cartId = exec('getmac');
    $cartId = strtok($cartId, ' ');
    $checkoutBoxLoader->loadSessionCheckBox($cartId);
}
