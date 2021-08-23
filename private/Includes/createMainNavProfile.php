<?php
if (isset($_COOKIE["userId"])) {
    echo "<div class='dropdown'>
            <div class='dropdown-menu profile-dropdown'>
                <li class='py-1'>
                    <a href='#' class='text-decoration-none ps-2 dropdown-item'>My profile</a>
                </li>
                <div class='dropdown-item py-1'>
                    <a class='text-decoration-none ms-2' href='#'>My cart</a>
                </div>
            </div>
            <div class='nav-button account-btn mx-5 pt-2'>
                <i class='far fa-user fa-2x'></i>
            </div>
        </div>";
} else {
    echo "<div class='dropdown'>
            <div class='dropdown-menu profile-dropdown'>
                <div class='profile-dropdown-item py-1'>
                    <a href='login.php' class='text-decoration-none ps-2'>Login</a>
                </div>
                <div class='py-1'>
                    <a class='text-decoration-none ms-2' href='register.php'>Register</a>
                </div>
            </div>
            <div class='nav-button account-btn mx-5 pt-2'>
                <i class='far fa-user fa-2x'></i>
            </div>
        </div>";
}
