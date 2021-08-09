<?php

class PTitleLoader extends PLoader
{

    public function load()
    {
        $productId = $this->getProductId();
        $productTitle = ProductManagement::getProductTitle($productId);
        echo "<p class= product-title>" . $productTitle[0]["title"] . "</p>";
    }
}