<?php

namespace private\Classes\Loader\ProductLoader\PDescriptionLoader;

use private\Classes\Database\ProductManagement;
use private\Classes\Loader\ProductLoader\PLoader;

class PShortDescriptionLoader extends PLoader
{

    function load($productId)
    {
        $shortDescription = ProductManagement::getProductsShortDescription($productId);
        echo "<div>
                 <p class='lead'>
                    $shortDescription
                 </p>
             </div>";
    }
}