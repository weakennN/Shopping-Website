<?php

use private\Classes\Common\Decrypt;
use private\Classes\Database\CartManagement;
use private\Classes\OrderManager\OrderManager;

if (!isset($_POST["addressId"])) {
    header("Location: http://localhost/test/public/checkout.php?error=invalidAddress");
} else {
    include_once "../AutoLoad/autoLoader.php";

    $userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    $orderManager = new OrderManager();
    $orderManager->createOrder($userId, $_POST["addressId"]);
    CartManagement::emptyCart($userId);
    CartManagement::deleteCartItems($userId);
}

