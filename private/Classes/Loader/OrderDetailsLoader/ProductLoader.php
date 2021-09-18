<?php

namespace private\Classes\Loader\OrderDetailsLoader;

use private\Classes\Database\OrderManagement;
use private\Classes\Database\ProductManagement;

class ProductLoader
{

    public function load($orderId)
    {
        $orderedItems = OrderManagement::getOrderedItems($orderId);

        foreach ($orderedItems as $orderedItem) {
            $productId = $orderedItem["product_id"];
            $takenPrice = $orderedItem["taken_price"];
            $quantity = $orderedItem["quantity"];
            $totalPrice = ((int)$quantity) * ((float)$takenPrice);
            $title = ProductManagement::getProductTitle($productId);
            $image = ProductManagement::getImage($productId);
            echo " <div class='d-flex flex-row p-3'>
                        <a href='product.php?id=$productId'>
                            <img style='height: 110px;object-fit: contain' src='recourses/images/ProductImages/$productId/$image'
                                 alt=''>
                        </a>
                        <a href='product.php?id=$productId'>
                            <p class='m-0 ms-3 mt-2 title' style='font-size: 17px'>$title</p>
                        </a>
                        <div class='d-flex flex-column ms-auto mt-2'>
                            <p class='m-0 lead'>$$totalPrice</p>
                            <p class='m-0 lead'>x $quantity</p>
                        </div>
                    </div>";
        }
    }
}