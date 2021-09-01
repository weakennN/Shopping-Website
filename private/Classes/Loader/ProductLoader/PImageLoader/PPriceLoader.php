<?php

namespace private\Classes\Loader\ProductLoader\PImageLoader;

class PPriceLoader extends \private\Classes\Loader\ProductLoader\PLoader
{

    public function load($productId)
    {
        $productPrice = \private\Classes\Database\ProductManagement::getProductPrice($productId);
        echo "<h2 id='price' class='display-5'>Price: $" . $productPrice[0]["price"] . "</h2>";
    }
}