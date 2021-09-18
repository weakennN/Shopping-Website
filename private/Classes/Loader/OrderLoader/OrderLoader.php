<?php

namespace private\Classes\Loader\OrderLoader;

use private\Classes\Database\OrderManagement;

class OrderLoader
{

    private OrderElementCreator $orderElementCreator;

    public function __construct($orderElementCreator)
    {
        $this->orderElementCreator = $orderElementCreator;
    }

    public function loadAllOrders($userId)
    {
        $orders = OrderManagement::getOrders($userId);
        if (count($orders) <= 0) {
            echo "<p style='font-size: 24px' class='lead ms-3'>You don't have any orders.</p>";
        }
        $this->createOrders($orders);
    }

    public function loadLatestOrders($userId)
    {
        $orders = OrderManagement::getLatestOrders($userId);
        if (count($orders) <= 0) {
            echo "<p style='font-size: 24px' class='lead ms-1'>You don't have any orders.</p>";
        }
        $this->createOrders($orders);
    }

    private function createOrders($orders)
    {
        foreach ($orders as $order) {
            $date = OrderManagement::formatOrderDate($order["date"]);
            echo $this->orderElementCreator->create($order["id"], $date, $order["total"]);
        }
    }
}