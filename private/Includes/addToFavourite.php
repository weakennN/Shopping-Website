<?php

use private\Classes\Common\Decrypt;
use private\Classes\FavouriteList\FavouriteList;

include_once "../AutoLoad/autoLoader.php";

if (isset($_COOKIE["userId"])) {
    if (isset($_POST["productId"]) && is_numeric($_POST["productId"])) {
        $userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
        $favouriteList = new FavouriteList();
        $favouriteList->addToFavourite($userId, $_POST["productId"]);
        echo "display";
    }
}
