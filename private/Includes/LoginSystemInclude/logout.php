<?php

use private\Classes\CookieManager;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

if (isset($_COOKIE["userId"])) {
    CookieManager::createCookie("userId", $_COOKIE["userId"], time() - 15552000, "/");
    header("Location: http://localhost/index.php");
}