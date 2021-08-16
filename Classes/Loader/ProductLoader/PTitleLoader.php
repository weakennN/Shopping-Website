<?php

class PTitleLoader extends PLoader
{

    public function load()
    {
        $productId = $this->getProductId();
        $productTitle = ProductManagement::getProductTitle($productId);
        echo "<p class= 'product-title mx-lg-4 px-2 mx-md-2'>" . $productTitle[0]["title"] . "</p>";
    }
}