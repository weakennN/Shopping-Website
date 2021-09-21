<?php

use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionLoader;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PImageDescriptionLoader;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PTextDescription;
use private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PVideoDescriptionLoader;

$subLoaders = array(
    new PTextDescription()
, new PImageDescriptionLoader()
, new PVideoDescriptionLoader());
$productDescriptionLoader = new PDescriptionLoader($subLoaders);

$productDescriptionLoader->load($_GET["id"]);
