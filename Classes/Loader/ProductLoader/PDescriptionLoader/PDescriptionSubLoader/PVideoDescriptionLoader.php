<?php

class PVideoDescriptionLoader extends PDescriptionSubLoader
{

    public function match($value): bool
    {
        return str_contains($value, "vid:");
    }

    public function load($value)
    {
        $components = preg_split("/vid:/", $value);
        $video = $components[1];
        echo "<div class='ratio ratio-16x9 mb-3'>
                    <iframe
                            src=" . $video . "
                            title='YouTube video'
                            allowfullscreen
                            ></iframe>
                </div>";
    }
}