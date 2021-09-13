<?php

use private\Classes\AddressManager\AddressManager;
use private\Classes\User\User;

include_once "../../AutoLoad/autoLoader.php";

if (isset($_POST["addressId"])) {
    $userId = User::getUserId();
    $addressManager = new AddressManager($userId);
    $addressManager->deleteAddress($_POST["addressId"]);
}
