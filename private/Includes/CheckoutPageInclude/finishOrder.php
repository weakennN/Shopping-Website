<?php

use private\Classes\Common\Encryptor;
use private\Classes\Database\CartManagement;
use private\Classes\OrderManager\OrderManager;
use private\Classes\User\User;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

if (isset($_COOKIE["userId"])) {
    $userId = User::getUserId();

    if (!isset($_POST["addressId"]) || count(CartManagement::getUserCartItems($userId)) <= 0) {
        header("Location: http://localhost/checkout.php?error=" . Encryptor::encrypt("Please choose address."));
    } else {
        $orderManager = new OrderManager();
        $orderManager->createOrder($userId, $_POST["addressId"]);
        CartManagement::emptyCart($userId);
        CartManagement::deleteCartItems($userId);
        header("Location: http://localhost/completedOrder.php?order=" . User::getLastOrder());
    }
}
