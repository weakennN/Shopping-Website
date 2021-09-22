<?php

use private\Classes\User\User;

if (!isset($_GET["order"]) || User::getLastOrder() != $_GET["order"]) {
    header("Location: http://localhost/index.php");
}