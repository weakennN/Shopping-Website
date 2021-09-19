<?php

use private\Classes\Database\UserManagement;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PShortDescriptionLoader;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])) {
    $productsShortDescriptionLoader = new PShortDescriptionLoader();
    $productsShortDescriptionLoader->load($_GET["id"]);
} else {
    include_once $_SERVER["HOME"] . "/private/Includes/ErrorPageInclude/errorPageInclude.php";
    redirectTo404();
}
