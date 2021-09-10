<?php

use private\Classes\Common\Decrypt;
use private\Classes\Database\CartManagement;

if (isset($_COOKIE["userId"])) {
    $userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
    if (count(CartManagement::getUserCartItems($userId)) <= 0) {
        header('Location: http://localhost/test/public/index.php');
    }
}
