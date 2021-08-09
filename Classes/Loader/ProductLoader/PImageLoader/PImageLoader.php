<?php

abstract class PImageLoader extends PLoader
{

    public function getImages()
    {
        $images = array();
        $productId = $this->getProductId();
        $path = "recourses/images/ProductImages/" . $productId . "/";
        if ($dh = opendir($path)) {
            while ((($file = readdir($dh))) !== false) {
                $image = $path . $file;
                array_push($images, $image);
            }
        }

        closedir($dh);

        return $images;
    }
}