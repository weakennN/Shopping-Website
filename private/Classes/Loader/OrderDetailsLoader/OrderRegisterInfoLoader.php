<?php

namespace private\Classes\Loader\OrderDetailsLoader;

use private\Classes\Database\OrderManagement;

class OrderRegisterInfoLoader
{

    public function load($orderId, $userId)
    {
        $order = OrderManagement::getOrder($orderId, $userId);
        $registeredDate = OrderManagement::formatOrderDate($order["date"]);
        $total = $order["total"];

        echo "<div class='p-3 shadow-border mt-3'>
                <p class='m-0 mb-1 ms-1' style='font-size: 18px'>Registered on: $registeredDate</p>
                <p class='m-0 ms-1' style='font-size: 18px'>Total: $$total</p>
            </div>";
    }
}