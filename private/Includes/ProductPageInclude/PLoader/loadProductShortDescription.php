<?php

use private\Classes\Loader\ProductLoader\PDescriptionLoader\PShortDescriptionLoader;

$productsShortDescriptionLoader = new PShortDescriptionLoader();
$productsShortDescriptionLoader->load($_GET["id"]);
