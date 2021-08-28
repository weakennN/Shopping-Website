<?php

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

if (isset($_POST["productId"]) && is_int($_POST["productId"])) {
    $cart = new \private\Classes\Cart\Cart();
    $cart->removeFromCart($_POST["productId"]);
}
