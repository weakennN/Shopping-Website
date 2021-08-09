<?php

class PPriceLoader extends PLoader
{

    public function load()
    {
        $productPrice = ProductManagement::getProductPrice($this->getProductId());
        echo "<h2 class='display-5'>Price: $" . $productPrice[0]["price"] . "</h2>";
    }
}