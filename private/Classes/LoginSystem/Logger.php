<?php

namespace private\Classes\LoginSystem;

use private\Classes\CookieManager;
use private\Classes\Database\UserManagement;

class Logger
{
    public function logInUser($email)
    {
        $userId = UserManagement::getUserId($email);
        $authentication = UserManagement::getUserAuthentication($userId);
        $userCookie = $userId . " " . $authentication;
        if (isset($_POST["rememberMe"])) {
            // setting 6 month cookie if user checked remember me
            CookieManager::createCookie("userId", $userCookie, time() + 15552000, "/");
        } else {
            // setting one day cookie if user didn't check remember me
            CookieManager::createCookie("userId", $userCookie, time() + 86400, "/");
        }
    }
}