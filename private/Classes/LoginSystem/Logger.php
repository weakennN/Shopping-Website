<?php

namespace private\Classes\LoginSystem;

use private\Classes\CookieManager;
use private\Classes\Database\UserManagement;

class Logger extends \private\Classes\LoginSystem\Entry
{
    public function __construct($validators)
    {
        parent::__construct($validators);
    }

    public function verify(): bool
    {
        $validators = parent::getValidators();

        foreach ($validators as $validator) {
            if (!$validator->validate()) {
                return false;
            }
        }

        return true;
    }

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