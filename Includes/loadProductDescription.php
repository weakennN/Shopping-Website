<?php

$subLoaders = array(new PTextDescription(), new PImageDescriptionLoader(), new PVideoDescriptionLoader());
$productDescriptionLoader = new PDescriptionLoader($subLoaders);
$productDescriptionLoader->load();
