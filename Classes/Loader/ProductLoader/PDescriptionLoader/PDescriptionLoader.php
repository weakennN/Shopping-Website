<?php

class PDescriptionLoader extends PLoader
{
    private $subLoaders;

    function __construct($subLoaders)
    {
        $this->subLoaders = $subLoaders;
    }

    public function load()
    {
        $description = ProductManagement::getProductDescription($this->getProductId());
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