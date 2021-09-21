<?php

use private\Classes\Database\UserManagement;

if (!isset($_GET["id"]) || !UserManagement::doesProductExist($_GET["id"])) {
    header("Location: http://localhost/test/public/error404.php");
}
