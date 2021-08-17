<?php

namespace private\Classes\Loader\ProductLoader;

abstract class PLoader extends \private\Classes\Loader\Loader
{
    public function getProductId()
    {
        return $_GET["id"];
    }
}