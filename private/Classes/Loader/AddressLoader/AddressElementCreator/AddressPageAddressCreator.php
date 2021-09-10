<?php

namespace private\Classes\Loader\AddressLoader\AddressElementCreator;

class AddressPageAddressCreator extends AddressElementCreator
{

    public function create($addressId, $name, $phone, $address, $city, $country): string
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