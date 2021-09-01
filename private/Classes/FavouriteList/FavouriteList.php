<?php

namespace private\Classes\FavouriteList;

use http\Client\Curl\User;
use private\Classes\Database\UserManagement;

class FavouriteList
{

    public function addToFavourite($userId, $productId)
    {
        if (UserManagement::doesProductExist($productId) && !UserManagement::isProductAddedToFavourite($userId, $productId)) {
            UserManagement::addToFavourite($userId, $productId);
        }
    }

    public function removeFromFavourite($userId, $productId)
    {
        if (UserManagement::doesProductExist($productId) && UserManagement::isProductAddedToFavourite($userId, $productId)) {
            UserManagement::removeFromFavourite($userId, $productId);
        }
    }
}