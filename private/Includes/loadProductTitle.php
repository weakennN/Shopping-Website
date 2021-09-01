<?php

use private\Classes\Database\UserManagement;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])) {
    $pTitleLoader = new \private\Classes\Loader\ProductLoader\PTitleLoader();
    $pTitleLoader->load($_GET["id"]);
}
