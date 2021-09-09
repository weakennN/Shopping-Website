<?php

use private\Classes\Database\CartManagement;

function loadSessionProducts($cartId)
{
    $sessionCartId = exec('getmac');
    $sessionCartId = strtok($sessionCartId, ' ');
    $sessionCartItems = CartManagement::getSessionCartItems($sessionCartId);
    CartManagement::insertSessionItemsToUserCart($sessionCartItems, $cartId);
    CartManagement::deleteSessionItems($sessionCartId);
}




