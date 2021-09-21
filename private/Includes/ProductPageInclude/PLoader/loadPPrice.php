<?php

use private\Classes\Loader\ProductLoader\PImageLoader\PPriceLoader;

$pPriceLoader = new PPriceLoader();
$pPriceLoader->load($_GET["id"]);
