<?php

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";
$cart = new \private\Classes\Cart\Cart();
$cart->addToCart($_POST["productId"]);
