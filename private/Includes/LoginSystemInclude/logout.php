<?php

use private\Classes\CookieManager;

include_once "../../AutoLoad/autoLoader.php";

if (isset($_COOKIE["userId"])) {
    CookieManager::createCookie("userId", $_COOKIE["userId"], time() - 15552000, "/");
    header("Location: http://localhost/test/public/index.php");
}