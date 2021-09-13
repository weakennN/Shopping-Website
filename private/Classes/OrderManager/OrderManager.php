<?php

namespace private\Classes\OrderManager;

use private\Classes\Database\AddressManagement;
use private\Classes\Database\OrderManagement;
use private\Classes\Database\CartManagement;
use private\Classes\Database\ProductManagement;

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
        $cartItems = CartManagement::getUserCartItems($userId);
        foreach ($cartItems as $cartItem) {
            $productPrice = ProductManagement::getProductPrice($cartItem["product_id"]);
            OrderManagement::createOrderItem($orderId, $cartItem["product_id"], $productPrice[0]["price"], $cartItem["quantity"]);
        }
    }
}