<?php

use private\Classes\Loader\OrderDetailsLoader\ProductLoader;

$productLoader = new ProductLoader();
$productLoader->load($_GET["order"]);
