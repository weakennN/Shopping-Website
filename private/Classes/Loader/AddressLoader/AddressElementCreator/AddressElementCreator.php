<?php

namespace private\Classes\Loader\AddressLoader\AddressElementCreator;

abstract class AddressElementCreator
{
    public abstract function create($addressId, $name, $phone, $address, $city, $country): string;
}