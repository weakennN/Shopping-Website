<?php

class CookieManager
{

    public function createCookie($name, $value, $time, $path)
    {
        // TODO: crypt the cookie value and name
        if (isset($_COOKIE[$name])) {
            echo "cookie" . $name . "already set";
        } else {
            setcookie($name, $value, $time, $path);
        }
    }
}