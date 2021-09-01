<?php

$link = "";

if (isset($_COOKIE["userId"])) {
    echo "<a href='generalInfo.php' style='margin-right: 1rem'>
                <i class='far fa-user fa-2x responsive-navbar-item'></i>
                <div style='left: 23px !important;' class='position-absolute top-0 start-100 badge rounded-pill user-check'>
                <i class='fas fa-check'></i>
                </div>
            </a>";
} else {
    echo "<a href='login.php' style='margin-right: 1rem'>
                <i class='far fa-user fa-2x responsive-navbar-item'></i>
            </a>";
}



