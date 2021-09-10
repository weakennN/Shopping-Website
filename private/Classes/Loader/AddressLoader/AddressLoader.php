<?php

namespace private\Classes\Loader\AddressLoader;

use private\Classes\Database\AddressManagement;
use private\Classes\Loader\AddressLoader\AddressElementCreator\AddressElementCreator;

class AddressLoader
{
    private AddressElementCreator $addressElementCreator;

    public function __construct($addressElementCreator)
    {
        $this->addressElementCreator = $addressElementCreator;
    }

    public function load($userId)
    {
        $addresses = AddressManagement::getAddresses($userId);

        if (count($addresses) > 0) {
            foreach ($addresses as $address) {
                $country = AddressManagement::getCountryById($address["shipping_country"]);
                echo $this->addressElementCreator->create($address["id"], $address["name"], $address["phone"], $address["address"], $country, $address["city"]);
            }
        } else {
            echo "<p class='lead' id='no-addresses-text'>You don't have any addresses.</p>";
        }
    }
}