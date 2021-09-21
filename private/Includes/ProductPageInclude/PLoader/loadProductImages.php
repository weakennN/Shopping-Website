<?php

use private\Classes\Loader\ProductLoader\PImageLoader\PImageGalleryLoader;

$productImageLoader = new PImageGalleryLoader();
$productImageLoader->load($_GET["id"]);
