<?php

use private\Classes\Database\UserManagement;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])) {
    $productImageLoader = new \private\Classes\Loader\ProductLoader\PImageLoader\PImageGalleryLoader();
    $productImageLoader->load($_GET["id"]);

}
