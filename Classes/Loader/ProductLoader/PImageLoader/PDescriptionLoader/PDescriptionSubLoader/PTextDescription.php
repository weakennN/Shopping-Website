<?php

class PTextDescription extends PDescriptionSubLoader
{

    public function match($value)
    {
        if ($value[0] === "<") {
            return true;
        }

        return false;
    }

    public function load($value)
    {
        echo "<div class='mb-3'>" . $value . "</div>";
    }
}