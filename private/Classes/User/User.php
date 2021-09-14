<?php

namespace private\Classes\User;

use private\Classes\Common\Decrypt;
use private\Classes\Database\OrderManagement;

class User
{

    public static function getUserId(): string
    {
        return explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    }

    public static function getUserCartId(): string
    {
        return self::getUserId();
    }

    public static function getLastOrder()
    {
        return OrderManagement::getOrderId(self::getUserId());
    }
}