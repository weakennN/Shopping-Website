<?php

namespace private\Classes;

class CookieManager
{

    public static function createCookie($name, $value, $time, $path)
    {
        // TODO: crypt the cookie value and name
        if (isset($_COOKIE[$name])) {
            echo "cookie" . $name . "already set";
        } else {
            setcookie($name, $value, $time, $path);
        }
    }

    public static function appendToCookie($name, $appendValue, $time, $path)
    {
        setcookie($name, $_COOKIE[$name] . $appendValue, $time, $path);
    }
}