<?php

namespace private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader;

abstract class PDescriptionSubLoader
{

    public abstract function match($value): bool;

    public abstract function load($value);
}