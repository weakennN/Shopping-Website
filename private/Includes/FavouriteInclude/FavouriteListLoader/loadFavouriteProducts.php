<?php

use private\Classes\Loader\FavouriteListLoader\FavouriteListLoader;
use private\Classes\User\User;

$userId = User::getUserId();
$favouriteListLoader = new FavouriteListLoader();
$favouriteListLoader->load($userId);
