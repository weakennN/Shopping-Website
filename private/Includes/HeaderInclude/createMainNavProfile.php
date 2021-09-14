<?php
if (isset($_COOKIE["userId"])) {
    echo "<div class='dropdown profile-dropdown'>
            <div class='dropdown-menu profile-dropdown-menu'>
            <a href='generalInfo.php'>
            <div class='profile-dropdown-item py-1'>
                    <p class='text-decoration-none ps-2 navbar-dropdown-item m-0'>Profile</p>
                </div>
            </a>               
            <a href='favourite.php'>
                <div class='profile-dropdown-item py-1'>
                    <p class='text-decoration-none ms-2 navbar-dropdown-item m-0'>Favourite</p>
                </div>
            </a>
            <a href='cart.php'>
                  <div class='profile-dropdown-item py-1'>
                    <p class='text-decoration-none ms-2 navbar-dropdown-item m-0'>Cart</p>
                  </div>
            </a>              
               <hr class='dropdown-divider'> 
               <a href='../private/Includes/LoginSystemInclude/logout.php'>
                 <div class='profile-dropdown-item d-flex flex-row py-1'>
                  <i class='fas fa-sign-out-alt ms-2 mt-1'></i>
                    <p class='text-decoration-none ms-1 navbar-dropdown-item m-0'>Log out</p>
                </div>
                </a>
            </div>
            <a href='generalInfo.php'>
             <div class='nav-button account-btn pt-2 position-relative'>
                <i class='far fa-user fa-2x'></i>
                <div class='position-absolute top-0 start-100 badge rounded-pill user-check'>
                <i class='fas fa-check'></i>
                </div>
            </div>
            </a>
        </div>";
} else {
    echo "<div class='dropdown profile-dropdown'>
            <div class='dropdown-menu profile-dropdown-menu'>
            <a href='login.php'>
                <div class='profile-dropdown-item py-1'>
                    <p class='text-decoration-none ps-2 navbar-dropdown-item m-0'>Login</p>
                </div>
            </a>               
            <a href='register.php'>
                <div class='profile-dropdown-item py-1'>
                    <p class='text-decoration-none ps-2 navbar-dropdown-item m-0'>Register</p>
                </div>
            </a>                          
            </div>
            <a href='login.php'>
            <div class='nav-button account-btn pt-2'>
                <i class='far fa-user fa-2x'></i>
            </div>
            </a>
          
        </div>";
}
