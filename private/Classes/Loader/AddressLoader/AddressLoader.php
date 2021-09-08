<?php

namespace private\Classes\Loader\AddressLoader;

use private\Classes\Database\AddressManagement;

class AddressLoader
{
    public function load($userId)
    {
        $addresses = AddressManagement::getAddresses($userId);

        if (count($addresses) > 0) {
            foreach ($addresses as $address) {
                $country = AddressManagement::getCountryById($address["shipping_country"]);
                echo $this->createItem($address["id"], $address["name"], $address["phone"], $address["address"], $country, $address["city"]);
            }
        } else {

        }
    }

    private function createItem($addressId, $name, $phone, $address, $country, $city): string
    {
        return "<div class='card border-0 address' id=$addressId>
                        <div class='card-body p-0'>
                            <h5 class='card-title'>$name</h5>
                            <p class='card-text m-auto m-0'>$phone</p>
                            <p class='card-text m-0'>$address</p>
                            <p class='card-text m-0 '>$country - $city</p>
                            <div class='mt-3 d-flex flex-row'>
                                <button data-bs-target='#editAddressModal' data-bs-toggle='modal' type='button'
                                        class='btn modify-address-btn btn-primary me-2'>Edit
                                </button>
                                <button type='button' class='btn modify-address-btn btn-danger'>Delete</button>
                            </div>
                        </div>
                    </div>";
    }
}