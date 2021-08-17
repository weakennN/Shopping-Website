<?php

namespace private\Classes\Loader\ProductLoader\PImageLoader;

class PModalLoader extends \private\Classes\Loader\ProductLoader\PImageLoader\PImageLoader
{

    public function load()
    {
        $images = $this->getImages();

        for ($i = 2; $i < count($images); $i++) {
            echo " <div class='carousel-item' style='height: 100%;object-fit: contain'>
                                        <img class='img-fluid' style='height: 100%;object-fit: contain;'
                                             src=" . $images[$i] . ">
                                    </div>";
        }
    }
}