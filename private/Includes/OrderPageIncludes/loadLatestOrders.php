<?php

use private\Classes\Loader\OrderLoader\OrderElementCreator;
use private\Classes\Loader\OrderLoader\OrderLoader;
use private\Classes\User\User;

if (isset($_COOKIE["userId"])) {
    $orderLoader = new OrderLoader(new OrderElementCreator());
     $orderLoader->loadLatestOrders(User::getUserId());
}
