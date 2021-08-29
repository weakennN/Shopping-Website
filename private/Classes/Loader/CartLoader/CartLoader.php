<?php

namespace private\Classes\Loader\CartLoader;

use private\Classes\Database\CartManagement;

abstract class CartLoader
{

    public abstract function loadUserCart($cartId);

    public abstract function loadSessionCart($cartId);

    protected function getUserCartItems($cartId): bool|array
    {
        return CartManagement::getUserCartItems($cartId);
    }

    protected function getSessionCartItems($cartId): bool|array
    {
        return CartManagement::getSessionCartItems($cartId);
    }
}