<?php

if (!isset($_COOKIE["userId"])) {
    header("Location: http://localhost/test/public/login.php");
}
