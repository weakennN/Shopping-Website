<?php

namespace private\Classes\Loader\ProductLoader;

class PTitleLoader extends \private\Classes\Loader\ProductLoader\PLoader
{
    public function load()
    {
        $productId = $this->getProductId();
        $productTitle = \private\Classes\Database\ProductManagement::getProductTitle($productId);
        echo "<p class= 'product-title mx-lg-4 px-2 mx-md-2'>" . $productTitle[0]["title"] . "</p>";
    }
}