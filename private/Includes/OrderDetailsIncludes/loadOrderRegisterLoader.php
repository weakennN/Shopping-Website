<?php

use private\Classes\Loader\OrderDetailsLoader\OrderRegisterInfoLoader;
use private\Classes\User\User;

$orderRegisterLoader = new OrderRegisterInfoLoader();
$orderRegisterLoader->load($_GET["order"], User::getUserId());
