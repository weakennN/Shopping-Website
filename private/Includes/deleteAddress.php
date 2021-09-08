<?php

use private\Classes\AddressManager\AddressManager;
use private\Classes\Common\Decrypt;

include_once "../AutoLoad/autoLoader.php";

if (isset($_POST["addressId"])) {
    $userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    $addressManager = new AddressManager($userId);
    $addressManager->deleteAddress($_POST["addressId"]);
}
