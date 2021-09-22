<?php

use private\Classes\User\User;

if (!isset($_GET["order"]) || !User::orderExist($_GET["order"])) {
    header("Location: http://localhost/error404.php");
}
