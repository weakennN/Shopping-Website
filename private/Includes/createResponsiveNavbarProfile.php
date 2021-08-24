<?php

$link = "";

if (isset($_COOKIE["userId"])) {

} else {
    $link = "login.php";
}

echo "<a href='login.php' style='margin-right: 1rem'>
                <i class='far fa-user fa-2x responsive-navbar-item'></i>
            </a>";

