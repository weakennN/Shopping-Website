<?php

if (!isset($_COOKIE["userId"])) {
    header("Location: http://localhost/login.php");
}
