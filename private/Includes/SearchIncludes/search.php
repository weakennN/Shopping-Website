<?php

use private\Classes\ProductLoader;

$productLoader = new ProductLoader();
$productLoader->searchProducts($_GET["search"]);
