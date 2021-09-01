<?php

namespace private\Classes\Loader\ProductLoader\PDescriptionLoader;

class PDescriptionLoader extends \private\Classes\Loader\ProductLoader\PLoader
{
    private $subLoaders;

    function __construct($subLoaders)
    {
        $this->subLoaders = $subLoaders;
    }

    public function load($productId)
    {
        $description = \private\Classes\Database\ProductManagement::getProductDescription($productId);
        $components = explode(">", $description[0]["description"]);

        for ($i = 0; $i < count($components); $i++) {
            for ($j = 0; $j < count($this->subLoaders); $j++) {
                if ($this->subLoaders[$j]->match($components[$i])) {
                    $this->subLoaders[$j]->load($components[$i]);
                    break;
                }

            }
        }
    }
}