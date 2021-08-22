<?php

namespace private\Classes\Common;

class UserSecurity
{
    public static function hashPassword($password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function generateAuthentication($length): string
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    public static function compareHashes($password, $hash): bool
    {
        return password_verify($password, $hash);
    }
}