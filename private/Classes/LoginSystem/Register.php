<?php

namespace private\Classes\LoginSystem;

use private\Classes\Common\UserSecurity;
use private\Classes\CookieManager;
use private\Classes\Database\UserManagement;

class Register extends \private\Classes\LoginSystem\Entry
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

    public function registerUser($firstName, $lastName, $email, $password)
    {
        $password = UserSecurity::hashPassword($password);
        $authentication = UserSecurity::generateAuthentication(10);
        UserManagement::createUser($firstName, $lastName, $email, $password, $authentication);
        $userId = UserManagement::getUserId($email);
        UserManagement::createShoppingCart($userId);
        $userCookie = $userId . " " . $authentication;
        UserManagement::setCartAndFavouriteListId($userId);
        CookieManager::createCookie("userId", $userCookie, time() + 86400, "/");
    }
}