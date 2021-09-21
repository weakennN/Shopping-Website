<?php

use private\Classes\Loader\ProductLoader\PImageLoader\PModalLoader;

$pModal = new PModalLoader();
$pModal->load($_GET["id"]);
