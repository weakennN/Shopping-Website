<?php

use private\Classes\Database\UserManagement;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])){
    $slickSliderLoader = new \private\Classes\Loader\ProductLoader\PImageLoader\PSlickSliderLoader();
    $slickSliderLoader->load($_GET["id"]);
}

