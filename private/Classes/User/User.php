<?php

namespace private\Classes\User;

use private\Classes\Common\Decrypt;
use private\Classes\Database\OrderManagement;
use private\Classes\Database\UserManagement;

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

    public static function getFirstName()
    {
        return UserManagement::getFirstName(self::getUserId());
    }

    public static function orderExist($orderId): bool
    {
        return OrderManagement::orderExist(self::getUserId(), $orderId);
    }
}