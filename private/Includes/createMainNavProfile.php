<?php
if (isset($_COOKIE["userId"])) {
    echo "<div class='dropdown profile-dropdown'>
            <div class='dropdown-menu profile-dropdown-menu'>
                <div class='profile-dropdown-item py-1'>
                    <a href='#' class='text-decoration-none ps-2 navbar-dropdown-item'>My profile</a>
                </div>
                <div class='profile-dropdown-item py-1'>
                    <a class='text-decoration-none ms-2 navbar-dropdown-item' href='#'>My cart</a>
                </div>
               <hr class='dropdown-divider'> 
                <div class='profile-dropdown-item py-1'>
                  <i class='fas fa-sign-out-alt ms-2'></i>
                    <a href='#' class='text-decoration-none ms-1 navbar-dropdown-item'>Log out</a>
                </div>
            </div>
            <div class='nav-button account-btn mx-5 pt-2'>
                <i class='far fa-user fa-2x'></i>
            </div>
        </div>";
} else {
    echo "<div class='dropdown profile-dropdown'>
            <div class='dropdown-menu profile-dropdown-menu'>
                <div class='profile-dropdown-item py-1'>
                    <a href='login.php' class='text-decoration-none ps-2 navbar-dropdown-item'>Login</a>
                </div>
                <div class='profile-dropdown-item py-1'>
                    <a class='text-decoration-none ps-2 navbar-dropdown-item' href='register.php'>Register</a>
                </div>
            
            </div>
            <a href='login.php'>
            <div class='nav-button account-btn mx-5 pt-2'>
                <i class='far fa-user fa-2x'></i>
            </div>
            </a>
          
        </div>";

    // TODO add profile on hover to change page to profile page when when profile page is ready
}