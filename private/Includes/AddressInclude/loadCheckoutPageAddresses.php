<?php

use private\Classes\Loader\AddressLoader\AddressElementCreator\CheckoutPageAddressCreator;
use private\Classes\Loader\AddressLoader\AddressLoader;
use private\Classes\User\User;

$userId = User::getUserId();
$addressLoader = new AddressLoader(new CheckoutPageAddressCreator());
$addressLoader->load($userId);