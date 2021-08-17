<?php

$subLoaders = array(new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PTextDescription()
, new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PImageDescriptionLoader()
, new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionSubLoader\PVideoDescriptionLoader());
$productDescriptionLoader = new \private\Classes\Loader\ProductLoader\PDescriptionLoader\PDescriptionLoader($subLoaders);

$productDescriptionLoader->load();
