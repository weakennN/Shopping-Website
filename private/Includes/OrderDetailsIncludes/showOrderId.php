<?php

use private\Classes\User\User;

if (isset($_GET["order"]) && User::orderExist($_GET["order"])) {
    $orderId = $_GET["order"];
    echo "<h5 class='display-6'>Order № $orderId</h5>";
} else {

}
