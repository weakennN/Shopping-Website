<?php

use private\Classes\Cart\Cart;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

if (isset($_POST["productId"]) && is_numeric($_POST["productId"])) {
    $cart = new Cart();
    $cart->removeFromCart($_POST["productId"]);
}
