<?php

use private\Classes\Loader\AddressLoader\AddressElementCreator\AddressPageAddressCreator;
use private\Classes\Loader\AddressLoader\AddressLoader;
use private\Classes\User\User;

$userId = User::getUserId();
$addressLoader = new AddressLoader(new AddressPageAddressCreator());
$addressLoader->load($userId);
