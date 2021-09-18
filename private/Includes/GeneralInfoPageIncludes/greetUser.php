<?php

use private\Classes\User\User;

if (isset($_COOKIE["userId"])) {
    $firstName = User::getFirstName();
    echo "<h4 class='display-6 mt-3'>Hello $firstName !</h4>";
}