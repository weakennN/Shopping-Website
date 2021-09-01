<?php

use private\Classes\Database\UserManagement;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])){
    $subLoaders = array(new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PTextDescription()
    , new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PImageDescriptionLoader()
    , new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PVideoDescriptionLoader());
    $productDescriptionLoader = new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionLoader($subLoaders);

    $productDescriptionLoader->load($_GET["id"]);
}

