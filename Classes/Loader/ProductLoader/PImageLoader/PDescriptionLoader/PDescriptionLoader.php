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
        for ($i = 0; $i < count($this->subLoaders); $i++) {

        }
    }
}