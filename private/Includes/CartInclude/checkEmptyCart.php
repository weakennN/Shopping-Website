<?php

use private\Classes\Database\CartManagement;
use private\Classes\User\User;

if (isset($_COOKIE["userId"])) {
    $userId = User::getUserId();
    if (count(CartManagement::getUserCartItems($userId)) <= 0) {
        header('Location: http://localhost/index.php');
    }
}
