<?php

use private\Classes\Loader\ProductLoader\PTitleLoader;

$pTitleLoader = new PTitleLoader();
$pTitleLoader->load($_GET["id"]);
