<?php

use private\Classes\Common\Decrypt;
use private\Classes\Loader\AddressLoader\AddressElementCreator\CheckoutPageAddressCreator;
use private\Classes\Loader\AddressLoader\AddressLoader;

$userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];
$addressLoader = new AddressLoader(new CheckoutPageAddressCreator());
$addressLoader->load($userId);