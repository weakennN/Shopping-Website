<?php

namespace private\Classes\LoginSystem;

use private\Classes\Common\Encryptor;

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
        $password = \private\Classes\Common\UserSecurity::hashPassword($password);
        $authentication = \private\Classes\Common\UserSecurity::generateAuthentication(10);
        \private\Classes\Database\UserManagement::createUser($firstName, $lastName, $email, $password, $authorization);
        $userId = \private\Classes\Database\UserManagement::getUserId($email);
        \private\Classes\Database\UserManagement::createShoppingCart($userId);
        $userCookie = Encryptor::encrypt($userId . " " . $authentication);
        \private\Classes\Database\UserManagement::setCartAndFavouriteListId($userId);
        \private\Classes\CookieManager::createCookie("userId", $userCookie, time() + 86400, "/");
    }
}