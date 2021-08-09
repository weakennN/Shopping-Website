<?php

abstract class PLoader extends Loader
{
    public function getProductId()
    {
        return $_GET["id"];
    }
}