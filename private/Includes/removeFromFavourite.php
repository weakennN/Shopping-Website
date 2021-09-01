<?php

use private\Classes\FavouriteList\FavouriteList;

include_once "../AutoLoad/autoLoader.php";

if (isset($_COOKIE["userId"])) {
    if (isset($_POST["productId"]) && is_numeric($_POST["productId"])) {
        $userId = explode(" ", $_COOKIE["userId"])[0];
        $favouriteList = new FavouriteList();
        $favouriteList->removeFromFavourite($userId, $_POST["productId"]);
    }
} else {
    header('Location: http://localhost/test/public/login.php');
}
