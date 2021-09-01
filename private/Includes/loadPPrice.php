<?php

use private\Classes\Database\UserManagement;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])){
    $pPriceLoader = new \private\Classes\Loader\ProductLoader\PImageLoader\PPriceLoader();
    $pPriceLoader->load($_GET["id"]);
}
