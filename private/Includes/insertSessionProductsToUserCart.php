<?php

use private\Classes\Database\CartManagement;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

function loadSessionProducts($cartId){
        $sessionCartId = exec('getmac');
        $sessionCartId = strtok($sessionCartId, ' ');
        $sessionCartItems = CartManagement::getSessionCartItems($sessionCartId);
        CartManagement::insertSessionItemsToUserCart($sessionCartItems, $cartId);
        CartManagement::deleteSessionItems($sessionCartId);
}




