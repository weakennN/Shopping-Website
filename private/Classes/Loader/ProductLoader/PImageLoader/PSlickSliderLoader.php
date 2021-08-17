<?php

namespace private\Classes\Loader\ProductLoader\PImageLoader;

class PSlickSliderLoader extends \private\Classes\Loader\ProductLoader\PImageLoader\PImageLoader
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