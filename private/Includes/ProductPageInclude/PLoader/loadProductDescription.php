<?php

use private\Classes\Database\UserManagement;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionLoader;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PImageDescriptionLoader;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PTextDescription;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PVideoDescriptionLoader;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])) {
    $subLoaders = array(
        new PTextDescription()
    , new PImageDescriptionLoader()
    , new PVideoDescriptionLoader());
    $productDescriptionLoader = new PDescriptionLoader($subLoaders);

    $productDescriptionLoader->load($_GET["id"]);
} else {
    include_once $_SERVER["HOME"] . "/private/Includes/ErrorPageInclude/errorPageInclude.php";
    redirectTo404();
}

