<?php

class PImageDescriptionLoader extends PDescriptionSubLoader
{

    public function match($value): bool
    {
        return str_contains($value, "img:");
    }

    public function load($value)
    {
        $components = preg_split("/img:/", $value);
        $image = $components[1];
        echo "<div class='mb-3'>  
                <img class='img-fluid' src=" . $image . ">
                </div>";
    }
}