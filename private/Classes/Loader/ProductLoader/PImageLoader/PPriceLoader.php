<?php

namespace private\Classes\Loader\ProductLoader\PImageLoader;

class PPriceLoader extends \private\Classes\Loader\ProductLoader\PLoader
{

    public function load()
    {
        $productPrice = \private\Classes\Database\ProductManagement::getProductPrice($this->getProductId());
        echo "<h2 class='display-5'>Price: $" . $productPrice[0]["price"] . "</h2>";
    }
}