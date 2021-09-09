<?php

namespace private\Classes;

use private\Classes\Common\Encryptor;

class CookieManager
{

    public static function createCookie($name, $value, $time, $path)
    {
        setcookie($name, Encryptor::encrypt($value), $time, $path);
    }

    public static function appendToCookie($name, $appendValue, $time, $path)
    {
        setcookie($name, $_COOKIE[$name] . $appendValue, $time, $path);
    }
}