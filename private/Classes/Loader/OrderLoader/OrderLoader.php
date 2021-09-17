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

        foreach ($orders as $order) {
            $date = OrderManagement::formatOrderDate($order["date"]);
            echo $this->orderElementCreator->create($order["id"], $date, $order["total"]);
        }
    }

    public function loadLatestOrders($userId)
    {

    }
}