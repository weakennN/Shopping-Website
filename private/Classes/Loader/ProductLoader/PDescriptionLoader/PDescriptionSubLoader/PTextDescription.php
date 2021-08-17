<?php

namespace private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader;

class PTextDescription extends \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PDescriptionSubLoader
{

    public function match($value): bool
    {
        return str_contains($value, "*");
    }

    public function load($value)
    {
        $value = str_replace("*", "", $value);
        echo "<div class='mb-3'>" . $value . "</div>";
    }
}