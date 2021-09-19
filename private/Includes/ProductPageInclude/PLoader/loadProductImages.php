<?php

use private\Classes\Database\UserManagement;
use private\Classes\Loader\ProductLoader\PImageLoader\PImageGalleryLoader;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])) {
    $productImageLoader = new PImageGalleryLoader();
    $productImageLoader->load($_GET["id"]);

} else {
    include_once $_SERVER["HOME"] . "/private/Includes/ErrorPageInclude/errorPageInclude.php";
    redirectTo404();
}
