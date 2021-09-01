<?php

use private\Classes\Database\UserManagement;

if (isset($_GET["id"]) && UserManagement::doesProductExist($_GET["id"])) {
    $pModal = new \private\Classes\Loader\ProductLoader\PImageLoader\PModalLoader();
    $pModal->load($_GET["id"]);
}
