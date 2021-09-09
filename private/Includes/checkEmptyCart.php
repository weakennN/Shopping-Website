<?php

use private\Classes\Common\Decrypt;
use private\Classes\Database\CartManagement;

if (isset($_COOKIE["userId"])) {
    $userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    if (CartManagement::getUserCartItems($userId)) {
        echo "hello";
    }
}
