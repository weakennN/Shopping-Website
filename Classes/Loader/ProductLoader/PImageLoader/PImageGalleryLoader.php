<?php

class PImageGalleryLoader extends PImageLoader
{
    public function load()
    {
        $images = $this->getImages();
        $imageId = 0;
        for ($i = 2; $i < count($images); $i++) {
            echo "<img class='card-img-top img-fluid' id=img-" . $imageId++ . " onclick='imageClick(this.id)'
                     style='width: 100%;height: 100%;' data-bs-toggle='modal';
                     data-bs-target='#exampleModal'
                     src=" . $images[$i] . ">";
        }
    }
}