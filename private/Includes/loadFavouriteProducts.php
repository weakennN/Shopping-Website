<?php

use private\Classes\Common\Decrypt;
use private\Classes\Loader\FavouriteListLoader\FavouriteListLoader;


$userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
$favouriteListLoader = new FavouriteListLoader();
$favouriteListLoader->load($userId);
