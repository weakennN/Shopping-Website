<?php

use private\Classes\Loader\OrderDetailsLoader\ShippingDetailsLoader;

$shippingDetailsLoader = new ShippingDetailsLoader();
$shippingDetailsLoader->load($_GET["order"]);
