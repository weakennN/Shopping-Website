<?php

try {
    $pTitleLoader = new \private\Classes\Loader\ProductLoader\PTitleLoader();
    $pTitleLoader->load();
} catch (Exception $e) {
    echo "hello";
}

