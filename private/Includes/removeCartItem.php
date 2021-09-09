<?php

include_once "../AutoLoad/autoLoader.php";

use private\Classes\Cart\Cart;

if (isset($_POST["productId"]) && isset($_POST["quantity"])
    && is_numeric($_POST["productId"]) && is_numeric($_POST["quantity"])) {
    $cart = new Cart();
    $cart->removeCartItem($_POST["productId"], $_POST["quantity"]);
}
