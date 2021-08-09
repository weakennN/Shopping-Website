<?php

class PSlickSliderLoader extends PImageLoader
{

    public function load()
    {
        $images = $this->getImages();

        for ($i = 2; $i < count($images); $i++) {
            echo "<img class='card-img-top' style='height: 117px;object-fit: contain;'
                     src = " . $images[$i] . ">";
        }
    }
}