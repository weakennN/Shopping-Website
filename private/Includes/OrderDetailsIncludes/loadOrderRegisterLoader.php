<?php

use private\Classes\Loader\OrderDetailsLoader\OrderRegisterInfoLoader;
use private\Classes\User\User;

if (isset($_GET["order"]) && User::orderExist($_GET["order"]))
$orderRegisterLoader = new OrderRegisterInfoLoader();
$orderRegisterLoader->load($_GET["order"], User::getUserId());
