<?php

use private\Classes\Loader\ProductLoader\PImageLoader\PSlickSliderLoader;

$slickSliderLoader = new PSlickSliderLoader();
$slickSliderLoader->load($_GET["id"]);
