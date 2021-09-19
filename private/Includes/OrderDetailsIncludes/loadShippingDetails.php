<?php

use private\Classes\Loader\OrderDetailsLoader\ShippingDetailsLoader;
use private\Classes\User\User;

if (isset($_GET["order"]) && User::orderExist($_GET["order"])) {
    $shippingDetailsLoader = new ShippingDetailsLoader();
    $shippingDetailsLoader->load($_GET["order"]);
} else {
    include_once $_SERVER["HOME"] . "/private/Includes/ErrorPageInclude/errorPageInclude.php";
    redirectTo404();
}