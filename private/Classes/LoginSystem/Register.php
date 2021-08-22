<?php

namespace private\Classes\LoginSystem;

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
        $authorization = \private\Classes\Common\UserSecurity::generateAuthentication(10);
        \private\Classes\Database\UserManagement::createUser($firstName, $lastName, $email, $password, $authorization);
        $userId = \private\Classes\Database\UserManagement::getUserId($email);
        echo $userId;
        \private\Classes\Database\UserManagement::setCartAndFavouriteListId($userId);
        \private\Classes\CookieManager::createCookie("userId", $userId . " " . $authorization, time() + 86400, "/");
    }
}