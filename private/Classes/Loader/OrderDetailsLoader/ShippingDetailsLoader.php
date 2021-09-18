<?php

namespace private\Classes\Loader\OrderDetailsLoader;

use private\Classes\Database\AddressManagement;
use private\Classes\Database\OrderManagement;

class ShippingDetailsLoader
{

    public function load($orderId)
    {
        $shippingDetailsId = OrderManagement::getShippingDetailsId($orderId);
        $shippingDetails = OrderManagement::getShippingDetails($orderId, $shippingDetailsId);
        $name = $shippingDetails["name"];
        $phone = $shippingDetails["phone"];
        $address = $shippingDetails["address"];
        $country = AddressManagement::getCountryById($shippingDetails["country_id"]);
        $city = $shippingDetails["city"];
        echo "  <div class='mx-auto p-2'>
                    <div class='mt-3'>
                        <p style='font-size: 18px;font-weight: 600' class='m-1'>For:</p>
                        <p style='font-size: 18px' class='m-1'>$name, $phone</p>
                        <p style='font-size: 18px;font-weight: 600' class='m-1'>Address:</p>
                        <p style='font-size: 18px' class='m-1'>$address, $country-$city</p>
                    </div>
                </div>";
    }
}