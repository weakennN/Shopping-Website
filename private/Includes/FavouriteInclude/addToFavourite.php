<?php

use private\Classes\FavouriteList\FavouriteList;
use private\Classes\User\User;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

if (isset($_COOKIE["userId"])) {
    if (isset($_POST["productId"]) && is_numeric($_POST["productId"])) {
        $userId = User::getUserId();
        $favouriteList = new FavouriteList();
        $favouriteList->addToFavourite($userId, $_POST["productId"]);
        echo "display";
    }
}
