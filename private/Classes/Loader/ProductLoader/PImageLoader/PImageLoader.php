<?php

namespace private\Classes\Loader\ProductLoader\PImageLoader;

abstract class PImageLoader extends \private\Classes\Loader\ProductLoader\PLoader
{

    public function getImages($productId): array
    {
        $images = array();
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