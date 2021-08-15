<?php

class PTextDescription extends PDescriptionSubLoader
{

    public function match($value): bool
    {
        return str_contains($value, "*");
    }

    public function load($value)
    {
        echo "<div class='mb-3'>" . $value . "</div>";
    }
}