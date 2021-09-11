<?php

namespace private\Classes\OrderManager;

use private\Classes\Database\AddressManagement;
use private\Classes\Database\OrderManagement;
use private\Classes\Database\CartManagement;

class OrderManager
{

    public function createOrder($userId, $addressId)
    {
        $cartTotal = CartManagement::getUserCartTotal($userId);
        OrderManagement::createOrder($userId, $cartTotal);
        $orderId = OrderManagement::getOrderId($userId);
        $address = AddressManagement::getAddress($userId, $addressId);
        OrderManagement::createShippingDetails($orderId, $address["name"], $address["phone"],
            $address["address"], $address["city"], $address["shipping_country"]);
        $shippingDetailsId = OrderManagement::getShippingDetailsId($orderId);
        OrderManagement::setShippingDetailsIdToOrder($orderId, $shippingDetailsId);
        
    }
}