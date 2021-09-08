<?php

namespace private\Classes\AddressManager;

use private\Classes\Database\AddressManagement;

class AddressManager
{
    private int $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function addAddress($name, $phone, $address, $shipping_country_id, $city)
    {
        AddressManagement::addAddress($this->userId, $name, $phone, $address, $shipping_country_id, $city);
    }

    public function editAddress($addressId, $name, $phone, $address, $shipping_country_id, $city)
    {
        AddressManagement::editAddress($this->userId, $addressId, $name, $phone, $address, $shipping_country_id, $city);
    }

    public function deleteAddress($addressId)
    {
        if (!AddressManagement::addressIdExist($this->userId, $addressId)) {
            AddressManagement::deleteAddress($addressId, $this->userId);
        }
    }
}