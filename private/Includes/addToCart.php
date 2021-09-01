<?php

use private\Classes\Cart\Cart;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

if (isset($_POST["productId"]) && is_numeric($_POST["productId"]) && is_numeric($_POST["quantity"])) {
    $cart = new Cart();
    $cart->addToCart($_POST["productId"], $_POST["quantity"]);
} else {

}

